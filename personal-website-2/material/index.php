<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <style type="text/css">
            /* -- import Roboto Font ------------------------------ */
            @import "https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";
            
            
            /* -- box model --------------------------------------- */
            *,
            *:after,
            *:before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }
            
            /* -- Base style -------------------------------------- */
            html {
              position: relative;
              overflow-x: hidden;
              margin: 0;
              padding: 0;
              min-height: 100%;
            }
            
            body {
              font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
              font-style: normal;
              font-weight: 300;
              font-size: 14px;
              line-height: 1.4;
              color: #212121;
              background-color: #f5f5f5;
              -webkit-font-smoothing: antialiased;
              text-rendering: optimizeLegibility;
            }
            
            /* -- Google typography ------------------------------- */
            .title {
              font-size: 20px;
              font-weight: 300;
              line-height: 1.1;
              color: #212121;
              text-transform: inherit;
              letter-spacing: inherit;
            }
            
            .caption {
              font-size: 12px;
              font-weight: 300;
              line-height: 1.1;
              color: #bdbdbd;
              text-transform: inherit;
              letter-spacing: inherit;
            }
            
            /* -- Ripple-effect ----------------------------------- */
            .ripple-effect {
              position: relative;
              overflow: hidden;
              -webkit-transform: translatez(0);
            }
            .ink {
              display: block;
              position: absolute;
              pointer-events: none;
              border-radius: 50%;
              transform: scale(0);
            }
            .ink {
              background: #fff;
              opacity: 1;
            }
            .ink.animate {
              -webkit-animation: ripple-effect 0.5s linear;
              -o-animation: ripple-effect 0.5s linear;
              animation: ripple-effect 0.5s linear;
            }
            
            @keyframes ripple-effect {
              100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                -o-transform: scale(2.5);
                transform: scale(2.5);
              }
            }
            @-webkit-keyframes ripple-effect {
              100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                -o-transform: scale(2.5);
                transform: scale(2.5);
              }
            }
            @-moz-keyframes ripple-effect {
              100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                -o-transform: scale(2.5);
                transform: scale(2.5);
              }
            }
            @-ms-keyframes ripple-effect {
              100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                -o-transform: scale(2.5);
                transform: scale(2.5);
              }
            }
            @-o-keyframes ripple-effect {
              100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
                -ms-transform: scale(2.5);
                -o-transform: scale(2.5);
                transform: scale(2.5);
              }
            }
            
            /* -- Dashboard --------------------------------------- */
            .dashboard {
              position: relative;
              overflow-x: hidden;
              width: 100%;
              padding: 5px;
              margin: 0;
            }
            .dashboard > * {
              display: block;
              float: left;
              margin: 5px;
            }
            
            /* -- Tiles ------------------------------------------- */
            .tile {
              color: #212121;
              overflow: hidden;
              cursor: pointer;
              outline: 0;
              border: 0;
              border-radius: 0;
              -webkit-transition: all 0.15s ease-in-out;
              -o-transition: all 0.15s ease-in-out;
              transition: all 0.15s ease-in-out;
            }
            .tile:hover,
            .tile:active,
            .tile.active,
            .tile:focus,
            .tile:active:focus,
            .tile.active:focus {
              -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
              -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
              box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            }
            /* -- Tiles content ----------------------------------- */
            .tile .content-wrapper {
              position: absolute;
              display: block;
              top: 0;
              width: 100%;
              -webkit-transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
              -o-transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
              transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
            }
            .tile .content-wrapper .tile-content {
              position: relative;
              display: block;
              overflow: hidden;
            }
            .tile .content-wrapper .tile-content .tile-img {
              position: relative;
              display: block;
              width: 100%;
              margin: 0 auto;
              background-repeat: no-repeat;
              background-position: center center;
              -webkit-background-size: contain;
              -moz-background-size: contain;
              -o-background-size: contain;
              background-size: contain;
            }
            .tile .content-wrapper .tile-content .tile-img.tile-img-sm {
              position: absolute;
              margin: 0;
              padding: 0;
              display: block;
              opacity: 0.3;
            }
            .tile .content-wrapper .tile-content .tile-img.tile-img-bg {
              position: absolute;
              background-position: left top;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }
            .tile .content-wrapper .tile-content .tile-holder {
              position: relative;
              display: block;
              padding: 0;
            }
            .tile .content-wrapper .tile-content .tile-holder.tile-holder-sm {
              position: absolute;
              margin: 0;
              padding: 0;
            }
            /* -- Tiles color ------------------------------------- */
            .tile-red {
              background-color: #e84e40;
            }
            .tile-red .tile-content,
            .tile-red .title {
              color: #eceff1;
            }
            .tile-red:hover,
            .tile-red:active,
            .tile-red.active {
              background-color: #dd191d;
            }
            .tile-red:focus {
              background-color: #d01716;
            }
            .tile-red:disabled,
            .tile-red.disabled,
            .tile-red[disabled] {
              background-color: #b3b3b3;
            }
            .tile-red .ink {
              background-color: #c41411;
            }
            .tile-red-reverse {
              background-color: #e84e40;
            }
            .tile-red-reverse:hover {
              background-color: #eceff1;
            }
            .tile-red-reverse:hover .tile-content,
            .tile-red-reverse:hover .title {
              color: #e84e40;
            }
            .tile-red-inverse {
              background-color: #eceff1;
            }
            .tile-red-inverse .tile-content,
            .tile-red-inverse .title {
              color: #e84e40;
            }
            .tile-red-inverse-reverse .tile-content,
            .tile-red-inverse-reverse .title {
              color: #e84e40;
            }
            .tile-red-inverse-reverse:hover {
              background-color: #e84e40;
            }
            .tile-red-inverse-reverse:hover .tile-content,
            .tile-red-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-red-inverse-reverse .ink {
              background-color: #c41411;
            }
            .tile-pink {
              background-color: #ec407a;
            }
            .tile-pink .tile-content,
            .tile-pink .title {
              color: #eceff1;
            }
            .tile-pink:hover,
            .tile-pink:active,
            .tile-pink.active {
              background-color: #d81b60;
            }
            .tile-pink:focus {
              background-color: #c2185b;
            }
            .tile-pink:disabled,
            .tile-pink.disabled,
            .tile-pink[disabled] {
              background-color: #b3b3b3;
            }
            .tile-pink .ink {
              background-color: #ad1457;
            }
            .tile-pink-reverse {
              background-color: #ec407a;
            }
            .tile-pink-reverse:hover {
              background-color: #eceff1;
            }
            .tile-pink-reverse:hover .tile-content,
            .tile-pink-reverse:hover .title {
              color: #ec407a;
            }
            .tile-pink-inverse {
              background-color: #eceff1;
            }
            .tile-pink-inverse .tile-content,
            .tile-pink-inverse .title {
              color: #ec407a;
            }
            .tile-pink-inverse-reverse .tile-content,
            .tile-pink-inverse-reverse .title {
              color: #ec407a;
            }
            .tile-pink-inverse-reverse:hover {
              background-color: #ec407a;
            }
            .tile-pink-inverse-reverse:hover .tile-content,
            .tile-pink-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-pink-inverse-reverse .ink {
              background-color: #ad1457;
            }
            .tile-purple {
              background-color: #ab47bc;
            }
            .tile-purple .tile-content,
            .tile-purple .title {
              color: #eceff1;
            }
            .tile-purple:hover,
            .tile-purple:active,
            .tile-purple.active {
              background-color: #8e24aa;
            }
            .tile-purple:focus {
              background-color: #7b1fa2;
            }
            .tile-purple:disabled,
            .tile-purple.disabled,
            .tile-purple[disabled] {
              background-color: #b3b3b3;
            }
            .tile-purple .ink {
              background-color: #6a1b9a;
            }
            .tile-purple-reverse {
              background-color: #ab47bc;
            }
            .tile-purple-reverse:hover {
              background-color: #eceff1;
            }
            .tile-purple-reverse:hover .tile-content,
            .tile-purple-reverse:hover .title {
              color: #ab47bc;
            }
            .tile-purple-inverse {
              background-color: #eceff1;
            }
            .tile-purple-inverse .tile-content,
            .tile-purple-inverse .title {
              color: #ab47bc;
            }
            .tile-purple-inverse-reverse .tile-content,
            .tile-purple-inverse-reverse .title {
              color: #ab47bc;
            }
            .tile-purple-inverse-reverse:hover {
              background-color: #ab47bc;
            }
            .tile-purple-inverse-reverse:hover .tile-content,
            .tile-purple-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-purple-inverse-reverse .ink {
              background-color: #6a1b9a;
            }
            .tile-deep-purple {
              background-color: #7e57c2;
            }
            .tile-deep-purple .tile-content,
            .tile-deep-purple .title {
              color: #eceff1;
            }
            .tile-deep-purple:hover,
            .tile-deep-purple:active,
            .tile-deep-purple.active {
              background-color: #5e35b1;
            }
            .tile-deep-purple:focus {
              background-color: #512da8;
            }
            .tile-deep-purple:disabled,
            .tile-deep-purple.disabled,
            .tile-deep-purple[disabled] {
              background-color: #b3b3b3;
            }
            .tile-deep-purple .ink {
              background-color: #4527a0;
            }
            .tile-deep-purple-reverse {
              background-color: #7e57c2;
            }
            .tile-deep-purple-reverse:hover {
              background-color: #eceff1;
            }
            .tile-deep-purple-reverse:hover .tile-content,
            .tile-deep-purple-reverse:hover .title {
              color: #7e57c2;
            }
            .tile-deep-purple-inverse {
              background-color: #eceff1;
            }
            .tile-deep-purple-inverse .tile-content,
            .tile-deep-purple-inverse .title {
              color: #7e57c2;
            }
            .tile-deep-purple-inverse-reverse .tile-content,
            .tile-deep-purple-inverse-reverse .title {
              color: #7e57c2;
            }
            .tile-deep-purple-inverse-reverse:hover {
              background-color: #7e57c2;
            }
            .tile-deep-purple-inverse-reverse:hover .tile-content,
            .tile-deep-purple-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-deep-purple-inverse-reverse .ink {
              background-color: #4527a0;
            }
            .tile-indigo {
              background-color: #5c6bc0;
            }
            .tile-indigo .tile-content,
            .tile-indigo .title {
              color: #eceff1;
            }
            .tile-indigo:hover,
            .tile-indigo:active,
            .tile-indigo.active {
              background-color: #3949ab;
            }
            .tile-indigo:focus {
              background-color: #303f9f;
            }
            .tile-indigo:disabled,
            .tile-indigo.disabled,
            .tile-indigo[disabled] {
              background-color: #b3b3b3;
            }
            .tile-indigo .ink {
              background-color: #283593;
            }
            .tile-indigo-reverse {
              background-color: #5c6bc0;
            }
            .tile-indigo-reverse:hover {
              background-color: #eceff1;
            }
            .tile-indigo-reverse:hover .tile-content,
            .tile-indigo-reverse:hover .title {
              color: #5c6bc0;
            }
            .tile-indigo-inverse {
              background-color: #eceff1;
            }
            .tile-indigo-inverse .tile-content,
            .tile-indigo-inverse .title {
              color: #5c6bc0;
            }
            .tile-indigo-inverse-reverse .tile-content,
            .tile-indigo-inverse-reverse .title {
              color: #5c6bc0;
            }
            .tile-indigo-inverse-reverse:hover {
              background-color: #5c6bc0;
            }
            .tile-indigo-inverse-reverse:hover .tile-content,
            .tile-indigo-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-indigo-inverse-reverse .ink {
              background-color: #283593;
            }
            .tile-blue {
              background-color: #738ffe;
            }
            .tile-blue .tile-content,
            .tile-blue .title {
              color: #eceff1;
            }
            .tile-blue:hover,
            .tile-blue:active,
            .tile-blue.active {
              background-color: #4e6cef;
            }
            .tile-blue:focus {
              background-color: #455ede;
            }
            .tile-blue:disabled,
            .tile-blue.disabled,
            .tile-blue[disabled] {
              background-color: #b3b3b3;
            }
            .tile-blue .ink {
              background-color: #3b50ce;
            }
            .tile-blue-reverse {
              background-color: #738ffe;
            }
            .tile-blue-reverse:hover {
              background-color: #eceff1;
            }
            .tile-blue-reverse:hover .tile-content,
            .tile-blue-reverse:hover .title {
              color: #738ffe;
            }
            .tile-blue-inverse {
              background-color: #eceff1;
            }
            .tile-blue-inverse .tile-content,
            .tile-blue-inverse .title {
              color: #738ffe;
            }
            .tile-blue-inverse-reverse .tile-content,
            .tile-blue-inverse-reverse .title {
              color: #738ffe;
            }
            .tile-blue-inverse-reverse:hover {
              background-color: #738ffe;
            }
            .tile-blue-inverse-reverse:hover .tile-content,
            .tile-blue-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-blue-inverse-reverse .ink {
              background-color: #3b50ce;
            }
            .tile-light-blue {
              background-color: #29b6f6;
            }
            .tile-light-blue .tile-content,
            .tile-light-blue .title {
              color: #eceff1;
            }
            .tile-light-blue:hover,
            .tile-light-blue:active,
            .tile-light-blue.active {
              background-color: #039be5;
            }
            .tile-light-blue:focus {
              background-color: #0288d1;
            }
            .tile-light-blue:disabled,
            .tile-light-blue.disabled,
            .tile-light-blue[disabled] {
              background-color: #b3b3b3;
            }
            .tile-light-blue .ink {
              background-color: #0277bd;
            }
            .tile-light-blue-reverse {
              background-color: #29b6f6;
            }
            .tile-light-blue-reverse:hover {
              background-color: #eceff1;
            }
            .tile-light-blue-reverse:hover .tile-content,
            .tile-light-blue-reverse:hover .title {
              color: #29b6f6;
            }
            .tile-light-blue-inverse {
              background-color: #eceff1;
            }
            .tile-light-blue-inverse .tile-content,
            .tile-light-blue-inverse .title {
              color: #29b6f6;
            }
            .tile-light-blue-inverse-reverse .tile-content,
            .tile-light-blue-inverse-reverse .title {
              color: #29b6f6;
            }
            .tile-light-blue-inverse-reverse:hover {
              background-color: #29b6f6;
            }
            .tile-light-blue-inverse-reverse:hover .tile-content,
            .tile-light-blue-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-light-blue-inverse-reverse .ink {
              background-color: #0277bd;
            }
            .tile-cyan {
              background-color: #26c6da;
            }
            .tile-cyan .tile-content,
            .tile-cyan .title {
              color: #eceff1;
            }
            .tile-cyan:hover,
            .tile-cyan:active,
            .tile-cyan.active {
              background-color: #00acc1;
            }
            .tile-cyan:focus {
              background-color: #0097a7;
            }
            .tile-cyan:disabled,
            .tile-cyan.disabled,
            .tile-cyan[disabled] {
              background-color: #b3b3b3;
            }
            .tile-cyan .ink {
              background-color: #00838f;
            }
            .tile-cyan-reverse {
              background-color: #26c6da;
            }
            .tile-cyan-reverse:hover {
              background-color: #eceff1;
            }
            .tile-cyan-reverse:hover .tile-content,
            .tile-cyan-reverse:hover .title {
              color: #26c6da;
            }
            .tile-cyan-inverse {
              background-color: #eceff1;
            }
            .tile-cyan-inverse .tile-content,
            .tile-cyan-inverse .title {
              color: #26c6da;
            }
            .tile-cyan-inverse-reverse .tile-content,
            .tile-cyan-inverse-reverse .title {
              color: #26c6da;
            }
            .tile-cyan-inverse-reverse:hover {
              background-color: #26c6da;
            }
            .tile-cyan-inverse-reverse:hover .tile-content,
            .tile-cyan-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-cyan-inverse-reverse .ink {
              background-color: #00838f;
            }
            .tile-teal {
              background-color: #26a69a;
            }
            .tile-teal .tile-content,
            .tile-teal .title {
              color: #eceff1;
            }
            .tile-teal:hover,
            .tile-teal:active,
            .tile-teal.active {
              background-color: #00897b;
            }
            .tile-teal:focus {
              background-color: #00796b;
            }
            .tile-teal:disabled,
            .tile-teal.disabled,
            .tile-teal[disabled] {
              background-color: #b3b3b3;
            }
            .tile-teal .ink {
              background-color: #00695c;
            }
            .tile-teal-reverse {
              background-color: #26a69a;
            }
            .tile-teal-reverse:hover {
              background-color: #eceff1;
            }
            .tile-teal-reverse:hover .tile-content,
            .tile-teal-reverse:hover .title {
              color: #26a69a;
            }
            .tile-teal-inverse {
              background-color: #eceff1;
            }
            .tile-teal-inverse .tile-content,
            .tile-teal-inverse .title {
              color: #26a69a;
            }
            .tile-teal-inverse-reverse .tile-content,
            .tile-teal-inverse-reverse .title {
              color: #26a69a;
            }
            .tile-teal-inverse-reverse:hover {
              background-color: #26a69a;
            }
            .tile-teal-inverse-reverse:hover .tile-content,
            .tile-teal-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-teal-inverse-reverse .ink {
              background-color: #00695c;
            }
            .tile-green {
              background-color: #2baf2b;
            }
            .tile-green .tile-content,
            .tile-green .title {
              color: #eceff1;
            }
            .tile-green:hover,
            .tile-green:active,
            .tile-green.active {
              background-color: #0a8f08;
            }
            .tile-green:focus {
              background-color: #0a7e07;
            }
            .tile-green:disabled,
            .tile-green.disabled,
            .tile-green[disabled] {
              background-color: #b3b3b3;
            }
            .tile-green .ink {
              background-color: #0a7e07;
            }
            .tile-green-reverse {
              background-color: #2baf2b;
            }
            .tile-green-reverse:hover {
              background-color: #eceff1;
            }
            .tile-green-reverse:hover .tile-content,
            .tile-green-reverse:hover .title {
              color: #2baf2b;
            }
            .tile-green-inverse {
              background-color: #eceff1;
            }
            .tile-green-inverse .tile-content,
            .tile-green-inverse .title {
              color: #2baf2b;
            }
            .tile-green-inverse-reverse .tile-content,
            .tile-green-inverse-reverse .title {
              color: #2baf2b;
            }
            .tile-green-inverse-reverse:hover {
              background-color: #2baf2b;
            }
            .tile-green-inverse-reverse:hover .tile-content,
            .tile-green-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-green-inverse-reverse .ink {
              background-color: #0a7e07;
            }
            .tile-light-green {
              background-color: #9ccc65;
            }
            .tile-light-green .tile-content,
            .tile-light-green .title {
              color: #eceff1;
            }
            .tile-light-green:hover,
            .tile-light-green:active,
            .tile-light-green.active {
              background-color: #7cb342;
            }
            .tile-light-green:focus {
              background-color: #689f38;
            }
            .tile-light-green:disabled,
            .tile-light-green.disabled,
            .tile-light-green[disabled] {
              background-color: #b3b3b3;
            }
            .tile-light-green .ink {
              background-color: #558b2f;
            }
            .tile-light-green-reverse {
              background-color: #9ccc65;
            }
            .tile-light-green-reverse:hover {
              background-color: #eceff1;
            }
            .tile-light-green-reverse:hover .tile-content,
            .tile-light-green-reverse:hover .title {
              color: #9ccc65;
            }
            .tile-light-green-inverse {
              background-color: #eceff1;
            }
            .tile-light-green-inverse .tile-content,
            .tile-light-green-inverse .title {
              color: #9ccc65;
            }
            .tile-light-green-inverse-reverse .tile-content,
            .tile-light-green-inverse-reverse .title {
              color: #9ccc65;
            }
            .tile-light-green-inverse-reverse:hover {
              background-color: #9ccc65;
            }
            .tile-light-green-inverse-reverse:hover .tile-content,
            .tile-light-green-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-light-green-inverse-reverse .ink {
              background-color: #558b2f;
            }
            .tile-lime {
              background-color: #d4e157;
            }
            .tile-lime .tile-content,
            .tile-lime .title {
              color: #eceff1;
            }
            .tile-lime:hover,
            .tile-lime:active,
            .tile-lime.active {
              background-color: #c0ca33;
            }
            .tile-lime:focus {
              background-color: #afb42b;
            }
            .tile-lime:disabled,
            .tile-lime.disabled,
            .tile-lime[disabled] {
              background-color: #b3b3b3;
            }
            .tile-lime .ink {
              background-color: #9e9d24;
            }
            .tile-lime-reverse {
              background-color: #d4e157;
            }
            .tile-lime-reverse:hover {
              background-color: #eceff1;
            }
            .tile-lime-reverse:hover .tile-content,
            .tile-lime-reverse:hover .title {
              color: #d4e157;
            }
            .tile-lime-inverse {
              background-color: #eceff1;
            }
            .tile-lime-inverse .tile-content,
            .tile-lime-inverse .title {
              color: #d4e157;
            }
            .tile-lime-inverse-reverse .tile-content,
            .tile-lime-inverse-reverse .title {
              color: #d4e157;
            }
            .tile-lime-inverse-reverse:hover {
              background-color: #d4e157;
            }
            .tile-lime-inverse-reverse:hover .tile-content,
            .tile-lime-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-lime-inverse-reverse .ink {
              background-color: #9e9d24;
            }
            .tile-yellow {
              background-color: #ffee58;
            }
            .tile-yellow .tile-content,
            .tile-yellow .title {
              color: #eceff1;
            }
            .tile-yellow:hover,
            .tile-yellow:active,
            .tile-yellow.active {
              background-color: #fdd835;
            }
            .tile-yellow:focus {
              background-color: #fbc02d;
            }
            .tile-yellow:disabled,
            .tile-yellow.disabled,
            .tile-yellow[disabled] {
              background-color: #b3b3b3;
            }
            .tile-yellow .ink {
              background-color: #f9a825;
            }
            .tile-yellow-reverse {
              background-color: #ffee58;
            }
            .tile-yellow-reverse:hover {
              background-color: #eceff1;
            }
            .tile-yellow-reverse:hover .tile-content,
            .tile-yellow-reverse:hover .title {
              color: #ffee58;
            }
            .tile-yellow-inverse {
              background-color: #eceff1;
            }
            .tile-yellow-inverse .tile-content,
            .tile-yellow-inverse .title {
              color: #ffee58;
            }
            .tile-yellow-inverse-reverse .tile-content,
            .tile-yellow-inverse-reverse .title {
              color: #ffee58;
            }
            .tile-yellow-inverse-reverse:hover {
              background-color: #ffee58;
            }
            .tile-yellow-inverse-reverse:hover .tile-content,
            .tile-yellow-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-yellow-inverse-reverse .ink {
              background-color: #f9a825;
            }
            .tile-amber {
              background-color: #ffca28;
            }
            .tile-amber .tile-content,
            .tile-amber .title {
              color: #eceff1;
            }
            .tile-amber:hover,
            .tile-amber:active,
            .tile-amber.active {
              background-color: #ffb300;
            }
            .tile-amber:focus {
              background-color: #ffa000;
            }
            .tile-amber:disabled,
            .tile-amber.disabled,
            .tile-amber[disabled] {
              background-color: #b3b3b3;
            }
            .tile-amber .ink {
              background-color: #ff8f00;
            }
            .tile-amber-reverse {
              background-color: #ffca28;
            }
            .tile-amber-reverse:hover {
              background-color: #eceff1;
            }
            .tile-amber-reverse:hover .tile-content,
            .tile-amber-reverse:hover .title {
              color: #ffca28;
            }
            .tile-amber-inverse {
              background-color: #eceff1;
            }
            .tile-amber-inverse .tile-content,
            .tile-amber-inverse .title {
              color: #ffca28;
            }
            .tile-amber-inverse-reverse .tile-content,
            .tile-amber-inverse-reverse .title {
              color: #ffca28;
            }
            .tile-amber-inverse-reverse:hover {
              background-color: #ffca28;
            }
            .tile-amber-inverse-reverse:hover .tile-content,
            .tile-amber-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-amber-inverse-reverse .ink {
              background-color: #ff8f00;
            }
            .tile-orange {
              background-color: #ffa726;
            }
            .tile-orange .tile-content,
            .tile-orange .title {
              color: #eceff1;
            }
            .tile-orange:hover,
            .tile-orange:active,
            .tile-orange.active {
              background-color: #fb8c00;
            }
            .tile-orange:focus {
              background-color: #f57c00;
            }
            .tile-orange:disabled,
            .tile-orange.disabled,
            .tile-orange[disabled] {
              background-color: #b3b3b3;
            }
            .tile-orange .ink {
              background-color: #ef6c00;
            }
            .tile-orange-reverse {
              background-color: #ffa726;
            }
            .tile-orange-reverse:hover {
              background-color: #eceff1;
            }
            .tile-orange-reverse:hover .tile-content,
            .tile-orange-reverse:hover .title {
              color: #ffa726;
            }
            .tile-orange-inverse {
              background-color: #eceff1;
            }
            .tile-orange-inverse .tile-content,
            .tile-orange-inverse .title {
              color: #ffa726;
            }
            .tile-orange-inverse-reverse .tile-content,
            .tile-orange-inverse-reverse .title {
              color: #ffa726;
            }
            .tile-orange-inverse-reverse:hover {
              background-color: #ffa726;
            }
            .tile-orange-inverse-reverse:hover .tile-content,
            .tile-orange-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-orange-inverse-reverse .ink {
              background-color: #ef6c00;
            }
            .tile-deep-orange {
              background-color: #ff7043;
            }
            .tile-deep-orange .tile-content,
            .tile-deep-orange .title {
              color: #eceff1;
            }
            .tile-deep-orange:hover,
            .tile-deep-orange:active,
            .tile-deep-orange.active {
              background-color: #f4511e;
            }
            .tile-deep-orange:focus {
              background-color: #e64a19;
            }
            .tile-deep-orange:disabled,
            .tile-deep-orange.disabled,
            .tile-deep-orange[disabled] {
              background-color: #b3b3b3;
            }
            .tile-deep-orange .ink {
              background-color: #d84315;
            }
            .tile-deep-orange-reverse {
              background-color: #ff7043;
            }
            .tile-deep-orange-reverse:hover {
              background-color: #eceff1;
            }
            .tile-deep-orange-reverse:hover .tile-content,
            .tile-deep-orange-reverse:hover .title {
              color: #ff7043;
            }
            .tile-deep-orange-inverse {
              background-color: #eceff1;
            }
            .tile-deep-orange-inverse .tile-content,
            .tile-deep-orange-inverse .title {
              color: #ff7043;
            }
            .tile-deep-orange-inverse-reverse .tile-content,
            .tile-deep-orange-inverse-reverse .title {
              color: #ff7043;
            }
            .tile-deep-orange-inverse-reverse:hover {
              background-color: #ff7043;
            }
            .tile-deep-orange-inverse-reverse:hover .tile-content,
            .tile-deep-orange-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-deep-orange-inverse-reverse .ink {
              background-color: #d84315;
            }
            .tile-brown {
              background-color: #8d6e63;
            }
            .tile-brown .tile-content,
            .tile-brown .title {
              color: #eceff1;
            }
            .tile-brown:hover,
            .tile-brown:active,
            .tile-brown.active {
              background-color: #6d4c41;
            }
            .tile-brown:focus {
              background-color: #5d4037;
            }
            .tile-brown:disabled,
            .tile-brown.disabled,
            .tile-brown[disabled] {
              background-color: #b3b3b3;
            }
            .tile-brown .ink {
              background-color: #4e342e;
            }
            .tile-brown-reverse {
              background-color: #8d6e63;
            }
            .tile-brown-reverse:hover {
              background-color: #eceff1;
            }
            .tile-brown-reverse:hover .tile-content,
            .tile-brown-reverse:hover .title {
              color: #8d6e63;
            }
            .tile-brown-inverse {
              background-color: #eceff1;
            }
            .tile-brown-inverse .tile-content,
            .tile-brown-inverse .title {
              color: #8d6e63;
            }
            .tile-brown-inverse-reverse .tile-content,
            .tile-brown-inverse-reverse .title {
              color: #8d6e63;
            }
            .tile-brown-inverse-reverse:hover {
              background-color: #8d6e63;
            }
            .tile-brown-inverse-reverse:hover .tile-content,
            .tile-brown-inverse-reverse:hover .title {
              color: #eceff1;
            }
            .tile-brown-inverse-reverse .ink {
              background-color: #4e342e;
            }
            /*-- Tiles size --------------------------------------- */
            .tile {
              width: 270px;
              height: 130px;
            }
            .tile .content-wrapper .tile-content {
              height: 130px;
              padding: 10px;
            }
            .tile .content-wrapper .tile-content .tile-img {
              height: 86.66666667px;
            }
            .tile .content-wrapper .tile-content .tile-img-bg {
              width: 270px;
              height: 130px;
              margin-left: -10px;
              margin-top: -10px;
            }
            .tile .content-wrapper .tile-content .tile-img-sm {
              width: 65px;
              height: 43.33333333px;
            }
            .tile .content-wrapper .tile-content .tile-img-sm,
            .tile .content-wrapper .tile-content .tile-holder-sm {
              bottom: 10px;
              left: 10px;
            }
            .tile.tile-sqr {
              width: 130px;
            }
            .tile.tile-sqr .content-wrapper .tile-content .tile-img-bg {
              width: 130px;
            }
            .tile-lg {
              width: 550px;
              height: 270px;
            }
            .tile-lg .content-wrapper .tile-content {
              height: 270px;
              padding: 20px;
            }
            .tile-lg .content-wrapper .tile-content .tile-img {
              height: 180px;
            }
            .tile-lg .content-wrapper .tile-content .tile-img-bg {
              width: 550px;
              height: 270px;
              margin-left: -20px;
              margin-top: -20px;
            }
            .tile-lg .content-wrapper .tile-content .tile-img-sm {
              width: 135px;
              height: 90px;
            }
            .tile-lg .content-wrapper .tile-content .tile-img-sm,
            .tile-lg .content-wrapper .tile-content .tile-holder-sm {
              bottom: 20px;
              left: 20px;
            }
            .tile-lg.tile-sqr {
              width: 270px;
            }
            .tile-lg.tile-sqr .content-wrapper .tile-content .tile-img-bg {
              width: 270px;
            }
            .tile-sm {
              width: 130px;
              height: 60px;
            }
            .tile-sm .content-wrapper .tile-content {
              height: 60px;
              padding: 5px;
            }
            .tile-sm .content-wrapper .tile-content .tile-img {
              height: 40px;
            }
            .tile-sm .content-wrapper .tile-content .tile-img-bg {
              width: 130px;
              height: 60px;
              margin-left: -5px;
              margin-top: -5px;
            }
            .tile-sm .content-wrapper .tile-content .tile-img-sm {
              width: 30px;
              height: 20px;
            }
            .tile-sm .content-wrapper .tile-content .tile-img-sm,
            .tile-sm .content-wrapper .tile-content .tile-holder-sm {
              bottom: 5px;
              left: 5px;
            }
            .tile-sm.tile-sqr {
              width: 60px;
            }
            .tile-sm.tile-sqr .content-wrapper .tile-content .tile-img-bg {
              width: 60px;
            }
            /*-- Display animation -------------------------------- */
            .display-animation > * {
              -webkit-transform: scale(0);
              -ms-transform: scale(0);
              -o-transform: scale(0);
              transform: scale(0);
            }
            .display-animation > .animated {
              -webkit-animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
              -o-animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
              animation: display 0.5s cubic-bezier(0.55, 0, 0.1, 1) forwards;
            }
            .no-js .display-animation > * {
              -webkit-transform: scale(1);
              -ms-transform: scale(1);
              -o-transform: scale(1);
              transform: scale(1);
            }
            
            @keyframes display {
              from {
                -webkit-transform: scale(0);
              }
              to {
                -webkit-transform: scale(1);
              }
            }
            @-o-keyframes display {
              from {
                -webkit-transform: scale(0);
              }
              to {
                -webkit-transform: scale(1);
              }
            }
            @-ms-keyframes display {
              from {
                -webkit-transform: scale(0);
              }
              to {
                -webkit-transform: scale(1);
              }
            }
            @-moz-keyframes display {
              from {
                -webkit-transform: scale(0);
              }
              to {
                -webkit-transform: scale(1);
              }
            }
            @-webkit-keyframes display {
              from {
                -webkit-transform: scale(0);
              }
              to {
                -webkit-transform: scale(1);
              }
            }


        </style>
    </head>
    <body>
        <div class="dashboard display-animation" style="margin: 0 auto; width: 1130px;">
          <a class="tile tile-lg tile-pink ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Google Guidelines</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-purple ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Material Design Reel</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-cyan ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Material Design <span class="caption">PDF</span></span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-amber ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img tile-img-bg"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Doodle Archive</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-light-blue ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img tile-img-bg"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Google+</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-red ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Design Minutes</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-indigo ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Google Cast UX</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-sqr tile-deep-orange ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Glass Design</span>
                </span>
              </span>      
            </span>
          </a>
          <a class="tile tile-lg tile-light-green ripple-effect" href="#">
            <span class="content-wrapper">
              <span class="tile-content">
                <span class="tile-img tile-img-bg"></span>
                <span class="tile-holder tile-holder-sm">
                  <span class="title">Google Web Designer</span>
                </span>
              </span>      
            </span>
          </a>
        </div>
    </body>
    
    <script type="text/javascript">
            /**
             * Created by Kupletsky Sergey on 16.09.14.
             *
             * Hierarchical timing
             * Add specific delay for CSS3-animation to elements.
             */
            
            (function($) {
                var speed = 2000;
                var container =  $('.display-animation');
                container.each(function() {
                    var elements = $(this).children();
                    elements.each(function() {
                        var elementOffset = $(this).offset();
                        var offset = elementOffset.left*0.8 + elementOffset.top;
                        var delay = parseFloat(offset/speed).toFixed(2);
                        $(this)
                            .css("-webkit-animation-delay", delay+'s')
                            .css("-o-animation-delay", delay+'s')
                            .css("animation-delay", delay+'s')
                            .addClass('animated');
                    });
                });
            })(jQuery);
            
            /**
             * Created by Kupletsky Sergey on 04.09.14.
             *
             * Ripple-effect animation
             * Tested and working in: ?IE9+, Chrome (Mobile + Desktop), ?Safari, ?Opera, ?Firefox.
             * JQuery plugin add .ink span in element with class .ripple-effect
             * Animation work on CSS3 by add/remove class .animate to .ink span
            */
            
            (function($) {
                $(".ripple-effect").click(function(e){
                    var rippler = $(this);
            
                    // create .ink element if it doesn't exist
                    if(rippler.find(".ink").length == 0) {
                        rippler.append("<span class='ink'></span>");
                    }
            
                    var ink = rippler.find(".ink");
            
                    // prevent quick double clicks
                    ink.removeClass("animate");
            
                    // set .ink diametr
                    if(!ink.height() && !ink.width())
                    {
                        var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                        ink.css({height: d, width: d});
                    }
            
                    // get click coordinates
                    var x = e.pageX - rippler.offset().left - ink.width()/2;
                    var y = e.pageY - rippler.offset().top - ink.height()/2;
            
                    // set .ink position and add class .animate
                    ink.css({
                        top: y+'px',
                        left:x+'px'
                    }).addClass("animate");
                })
            })(jQuery);
        </script>
</html>