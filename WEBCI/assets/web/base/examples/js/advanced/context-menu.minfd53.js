/*!
 * Remark Material (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/advanced/context-menu",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.advancedContextMenu=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),_jquery2.default.contextMenu({selector:"#simpleContextMenu",items:{edit:{name:"Edit",icon:function(){return"context-menu-icon context-menu-extend-icon md-edit"}},cut:{name:"Cut",icon:function(){return"context-menu-icon context-menu-extend-icon md-scissors"}},copy:{name:"Copy",icon:function(){return"context-menu-icon context-menu-extend-icon md-copy"}},paste:{name:"Paste",icon:function(){return"context-menu-icon context-menu-extend-icon md-collection-item"}},delete:{name:"Delete",icon:function(){return"context-menu-icon context-menu-extend-icon md-delete"}},sep1:"---------",share:{name:"Share",icon:function(){return"context-menu-icon context-menu-extend-icon md-share"}}}}),_jquery2.default.contextMenu({selector:".contextMenu-example2 > span",items:{edit:{name:"Edit",icon:function(){return"context-menu-icon context-menu-extend-icon md-edit"}},cut:{name:"Cut",icon:function(){return"context-menu-icon context-menu-extend-icon md-scissors"}},copy:{name:"Copy",icon:function(){return"context-menu-icon context-menu-extend-icon md-copy"}},paste:{name:"Paste",icon:function(){return"context-menu-icon context-menu-extend-icon md-collection-item"}},delete:{name:"Delete",icon:function(){return"context-menu-icon context-menu-extend-icon md-delete"}},sep1:"---------",share:{name:"Share",icon:function(){return"context-menu-icon context-menu-extend-icon md-share"}}}}),_jquery2.default.contextMenu({selector:".contextMenu-example3",callback:function(key,options){var m="clicked: "+key;window.console&&void 0||alert(m)},items:{edit:{name:"Edit",icon:function(){return"context-menu-icon context-menu-extend-icon md-edit"}},cut:{name:"Cut",icon:function(){return"context-menu-icon context-menu-extend-icon md-scissors"}},copy:{name:"Copy",icon:function(){return"context-menu-icon context-menu-extend-icon md-copy"}},paste:{name:"Paste",icon:function(){return"context-menu-icon context-menu-extend-icon md-collection-item"}},delete:{name:"Delete",icon:function(){return"context-menu-icon context-menu-extend-icon md-delete"}},sep1:"---------",share:{name:"Share",icon:function(){return"context-menu-icon context-menu-extend-icon md-share"}}}})});