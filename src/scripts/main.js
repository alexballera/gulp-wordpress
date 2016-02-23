import $ from 'jquery'
import modernizr from './vendors/modernizr.js'
import selectivizr from './vendors/selectivizr.js'
import retinajs from './vendors/retina.js'
import showMenu from './lib/showMenu'
import changeButton from './lib/changeButton'
import doTransparentBar from './lib/doTransparentBar'
import loadJS from './lib/loadJS'
import showProjects from './lib/showProjects'
import showArticles from './lib/showArticles'
import lastsArticles from './lib/lastsArticles'
import showCategories from './lib/showCategories'

(() => {
  'use strict'

  document.addEventListener('DOMContentLoaded', onDOMLoad)

  function onDOMLoad () {
// Variables Globales
    var btnMenu = document.getElementById('btnMenu')
    var btnButton = document.getElementById('btnButton')
    var navBar = document.getElementById('navBar')

// Menú
    btnMenu.addEventListener('click', showMenu)
    navbarMenu.addEventListener('click', showMenu)
    btnButton.addEventListener('click', showMenu)
    btnButton.addEventListener('click', changeButton)

  // Load JS
    var urlJs = [
      '//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5698df4c26bc43c8'
    ]
    loadJS(urlJs)
  }
})()