root = window ? global # no need for node.js global in a slider but w/e
root.sliders = {}
$ = root.jQuery

class Slider
  constructor:(@sliderId, config = {})->
    $ = window.jQuery

    @settings =
      viewportMaxWidth:  config.viewportMaxWidth ? 1000
      viewportMaxHeight: config.viewportMaxHeight ? 500
      slideShow:         config.slideShow ? yes
      stopOnHover:       config.stopOnHover ? yes
      cycle:             config.cycle ? yes
      navigator:         config.navigator ? no
      navigatorInParent: config.navigatorInParent ? no # In case the navigator is defined outside the slider
      navigatorEvents:   config.navigatorEvents ? no
      autoHideBtns:      config.autoHideBtns ? yes ## not implemented
      duration:          config.duration ? 1000
      emmitEvents:       config.emmitEvents ? no
      draggable:         config.draggable ? yes

    @$sliderViewport   = $('#' + sliderId)
    @$slider           = $ @$sliderViewport.children('.slider')
    @$sliderItems      = $ @$slider.children('li')
    @$sliderPrevBtn    = $ @$sliderViewport.children('.prevBtn')
    @$sliderNextBtn    = $ @$sliderViewport.children('.nextBtn')

    @viewPortWidth = @$sliderViewport.width()
    @elementsQ = @$sliderItems.length
    @sliderWidth = @elementsQ * 100
    sliderItemWidth = 100 / @elementsQ
    @rightLimit = (@viewPortWidth * @elementsQ) - @viewPortWidth #
    @$slider.css 'width', "#{@sliderWidth}%"
    @$sliderItems.css 'width', "#{sliderItemWidth}%"

    @index = 0
    @slideToPos = 0
    @draggedEl = null
    @hasLimitClass = false

    if(@settings.navigator)
     @addNavigator()

    ## Listeners

    @$sliderPrevBtn.click (e)=>
      e.stopPropagation()
      @slideTo('prev')

    @$sliderNextBtn.click (e)=>
      e.stopPropagation()
      @slideTo('next')

    # Navigator Bullets

    @$sliderNavBtns.mousedown (e)=>
      e.stopPropagation()
      index = $(e.currentTarget).index()
      @slideTo(index)

    ## Drag
    if @settings.draggable
      @$sliderViewport.mousedown (e)=>
        e.stopPropagation()
        e.preventDefault()
        @dragStart(e)

      # Removes mousemove ev when the mouse is up anywhere in
      # the doc using the ev target stored in the mousedow ev
      # if @dragStartX means the current object called by the handler
      # did not started the mousedown event so we skip it

      $(document).mouseup (e)=>
        e.stopPropagation()
        e.preventDefault()
        @dragEnd(e)

  addNavigator: ()->
    navigatorHtml = '<ul class="navigator">';
    navigatorHtml += '<li class="navBullet selectedBullet"></li>'; # First item, already selected
    navigatorHtml += '<li class="navBullet"></li>' for i in [1...@elementsQ]
    navigatorHtml += '</ul>'
    @$sliderViewport.append(navigatorHtml)

    if @settings.navigatorInParent
      @$sliderNavBtns    = $ @$sliderViewport.parent().find('.navigator a')
    else
      @$sliderNavBtns    = $ @$sliderViewport.children('.navigator').children()


  dragStart: (e)->
    $el = $ e.currentTarget
    @dragStartX = e.pageX
    startX = e.pageX
    @draggedEl = e.currentTarget
    @slideToPos = @$slider.position().left
    #unless @slideToPos is 0
     # console.log "slideToPos:#{@slideToPos}"
    @$slider.stop()

    $el.on 'mousemove', (ev)=>

      offsetX = startX - ev.pageX # Difference between the new mouse x pos and the previus one

      startX = ev.pageX

      @slideToPos -= offsetX

      # Refactor below asap

      if @slideToPos >= 0
        @slideToPos = 0
        @isOutBounds = yes
        @dragStartX = startX
        unless @hasLimitClass
         @$sliderViewport.addClass('onLeftLimit')
         @hasLimitClass = yes

      else if @slideToPos <= -@rightLimit
        @slideToPos = -@rightLimit
        @isOutBounds = yes
        @dragStartX = startX
        unless @hasLimitClass
          @$sliderViewport.addClass('onRightLimit')
          @hasLimitClass = yes

      @$slider.css('left', @slideToPos + 'px')
      @isOutBounds = no
      ###
      We should use a better way to move the elements around, using forced gpu calcs
      @$slider.css({
        '-webkit-transform': "translate3d(#{@slideToPos}%, 0px, 0px) perspective(2000px)"
      })
      ###
      null

  dragEnd: (e)->

    unless not @draggedEl? or @clicked
      if @hasLimitClass
         @$sliderViewport.removeClass('onLeftLimit onRightLimit')
         @hasLimitClass = no

      offsetX = @dragStartX - e.pageX
      offsetPercentage = Math.abs (offsetX / @viewPortWidth)
      minToAction = 0.1 # The user must have dragged the slider at least 10% to move it

      if offsetPercentage < minToAction then offsetPercentage = 0

      if offsetX > 0 and not @isOutBounds

        ## Dragued-> right
        tempIndex = @index + Math.ceil(offsetPercentage)
      else if offsetX < 0 and not @isOutBounds

        ## Dragued-> left
        tempIndex = @index - Math.ceil(offsetPercentage)
      else

        ## Didn't move, or at least not much
        tempIndex = @index

      @slideTo(tempIndex)

      # if it goes beyond a certain percentage we use slideTo to move
      # to the next slide or we use it to center up the current one
      $(@draggedEl).off('mousemove')
      @draggedEl = null
      false

  ###
  # Moves the slider to the prev, next, or an specific position based on the command argument
  # @param {string}|{integer} command
  # @return {void}
  ###

  slideTo: (command)->
    @clicked = null

    switch command
      when 'next'
          @index++
      when 'prev'
          @index--
      when 'first'
          @index = 0
      when 'last'
          @index = @elementsQ - 1
      else
        if isFinite(command)
          @index = command
        else
          err = 'Please provide a valid command for the slider [prev,next or a valid index]'
          console.error err
          return false


    lastIndx = (@elementsQ - 1)

    if @index > lastIndx
      if @settings.cycle
        @index = 0
      else
        @index = lastIndx
        return false
    else if @index < 0
      if @settings.cycle
        @index = lastIndx
      else
        @index = 0
        return false

    @slideToPos = -1 * (@index * 100)

    if(@settings.navigator)
      selectedClass = 'selectedBullet'
      @$sliderNavBtns.removeClass selectedClass
      $(@$sliderNavBtns[@index]).addClass selectedClass

    @$slider.stop().animate({'left': @slideToPos + '%'}, @settings.duration)
    if(@settings.emmitEvents)
      $.event.trigger('onSlide', [@index, @sliderId]);


    ###
    @$slider.stop().css({
      '-webkit-transform': "translate3d(#{@slideToPos}%, 0px, 0px) perspective(2000px)"
    })
    ###

$ ->
  # Home Slider -> Contains the frame sliders
  sliders.main = new Slider 'mainSlider',
    autoHideBtns: yes
    emmitEvents: yes
    navigator: yes
