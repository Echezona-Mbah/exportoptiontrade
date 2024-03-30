<!DOCTYPE html>
<html lang="en" style="height: 100%" style="background-color: #298fa6">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=0.7, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{asset('user/images/logo1.png')}}" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('user/css/all.min.css')}}" />
    <link
      href="{{asset('js/061b39e95e1a0bd25e8d294af8596b2a')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}" type="text/css" />
    <script
      src="{{asset('user/js/twk-main.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      src="{{asset('user/js/twk-vendor.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      src="{{asset('user/js/twk-chunk-vendors.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      src="{{asset('user/js/twk-chunk-common.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      src="{{asset('user/js/twk-runtime.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      src="{{asset('user/js/twk-app.js.download')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script
      async=""
      src="{{asset('user/js/1fs71heba')}}"
      charset="UTF-8"
      crossorigin="*"
    ></script>
    <script type="text/javascript" async="" src="{{asset('user/js/init.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/jquery.min.js.download')}}"></script>
    <script type="text/javascript" src="{{asset('user/js/pdfmake.min.js.download')}}"></script>
    <script
      type="text/javascript"
      src="{{asset('user/js/html2canvas.min.js.download')}}"
    ></script>
    <link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}" type="text/css" />
    <link href="{{asset('user/css/dataTables.bootstrap4.css')}}" rel="stylesheet" />
    <link href="{{asset('user/css/responsive.dataTables.min.css')}}" rel="stylesheet" />
    <!-- <link href="vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet"> -->
    <!-- START FA FA ICONS LINK -->
    <link
      rel="stylesheet"
      href="{{asset('https://use.fontawesome.com/releases/v5.12.1/css/all.css')}}"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}"
    />
    <!-- END FA FA ICONS LINK -->
    <link rel="stylesheet" href="{{asset('user/css/dark_blue_adminux.css')}}" type="text/css" />
    <!-- <link rel="stylesheet" href="css/dark_green_adminux.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('user/css/margin.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('user/css/animate.min.css')}}" />
    <script src="{{asset('user/js/sweetalert2@10')}}"></script>
    <style>
      .swal2-popup.swal2-toast {
        flex-direction: column;
        align-items: stretch;
        width: auto;
        padding: 1.25em;
        overflow-y: hidden;
        background: #fff;
        box-shadow: 0 0 0.625em #d9d9d9;
      }

      .swal2-popup.swal2-toast .swal2-header {
        flex-direction: row;
        padding: 0;
      }

      .swal2-popup.swal2-toast .swal2-title {
        flex-grow: 1;
        justify-content: flex-start;
        margin: 0 0.625em;
        font-size: 1em;
      }

      .swal2-popup.swal2-toast .swal2-loading {
        justify-content: center;
      }

      .swal2-popup.swal2-toast .swal2-input {
        height: 2em;
        margin: 0.3125em auto;
        font-size: 1em;
      }

      .swal2-popup.swal2-toast .swal2-validation-message {
        font-size: 1em;
      }

      .swal2-popup.swal2-toast .swal2-footer {
        margin: 0.5em 0 0;
        padding: 0.5em 0 0;
        font-size: 0.8em;
      }

      .swal2-popup.swal2-toast .swal2-close {
        position: static;
        width: 0.8em;
        height: 0.8em;
        line-height: 0.8;
      }

      .swal2-popup.swal2-toast .swal2-content {
        justify-content: flex-start;
        margin: 0 0.625em;
        padding: 0;
        font-size: 1em;
        text-align: initial;
      }

      .swal2-popup.swal2-toast .swal2-html-container {
        padding: 0.625em 0 0;
      }

      .swal2-popup.swal2-toast .swal2-html-container:empty {
        padding: 0;
      }

      .swal2-popup.swal2-toast .swal2-icon {
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0 0.5em 0 0;
      }

      .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 1.8em;
        font-weight: 700;
      }

      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
          font-size: 0.25em;
        }
      }

      .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
      }

      .swal2-popup.swal2-toast
        .swal2-icon.swal2-error
        [class^="swal2-x-mark-line"] {
        top: 0.875em;
        width: 1.375em;
      }

      .swal2-popup.swal2-toast
        .swal2-icon.swal2-error
        [class^="swal2-x-mark-line"][class$="left"] {
        left: 0.3125em;
      }

      .swal2-popup.swal2-toast
        .swal2-icon.swal2-error
        [class^="swal2-x-mark-line"][class$="right"] {
        right: 0.3125em;
      }

      .swal2-popup.swal2-toast .swal2-actions {
        flex: 1;
        flex-basis: auto !important;
        align-self: stretch;
        width: auto;
        height: 2.2em;
        height: auto;
        margin: 0 0.3125em;
        margin-top: 0.3125em;
        padding: 0;
      }

      .swal2-popup.swal2-toast .swal2-styled {
        margin: 0.125em 0.3125em;
        padding: 0.3125em 0.625em;
        font-size: 1em;
      }

      .swal2-popup.swal2-toast .swal2-styled:focus {
        box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(100, 150, 200, 0.5);
      }

      .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86;
      }

      .swal2-popup.swal2-toast
        .swal2-success
        [class^="swal2-success-circular-line"] {
        position: absolute;
        width: 1.6em;
        height: 3em;
        transform: rotate(45deg);
        border-radius: 50%;
      }

      .swal2-popup.swal2-toast
        .swal2-success
        [class^="swal2-success-circular-line"][class$="left"] {
        top: -0.8em;
        left: -0.5em;
        transform: rotate(-45deg);
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em;
      }

      .swal2-popup.swal2-toast
        .swal2-success
        [class^="swal2-success-circular-line"][class$="right"] {
        top: -0.25em;
        left: 0.9375em;
        transform-origin: 0 1.5em;
        border-radius: 0 4em 4em 0;
      }

      .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em;
      }

      .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: 0.4375em;
        width: 0.4375em;
        height: 2.6875em;
      }

      .swal2-popup.swal2-toast .swal2-success [class^="swal2-success-line"] {
        height: 0.3125em;
      }

      .swal2-popup.swal2-toast
        .swal2-success
        [class^="swal2-success-line"][class$="tip"] {
        top: 1.125em;
        left: 0.1875em;
        width: 0.75em;
      }

      .swal2-popup.swal2-toast
        .swal2-success
        [class^="swal2-success-line"][class$="long"] {
        top: 0.9375em;
        right: 0.1875em;
        width: 1.375em;
      }

      .swal2-popup.swal2-toast
        .swal2-success.swal2-icon-show
        .swal2-success-line-tip {
        -webkit-animation: swal2-toast-animate-success-line-tip 0.75s;
        animation: swal2-toast-animate-success-line-tip 0.75s;
      }

      .swal2-popup.swal2-toast
        .swal2-success.swal2-icon-show
        .swal2-success-line-long {
        -webkit-animation: swal2-toast-animate-success-line-long 0.75s;
        animation: swal2-toast-animate-success-line-long 0.75s;
      }

      .swal2-popup.swal2-toast.swal2-show {
        -webkit-animation: swal2-toast-show 0.5s;
        animation: swal2-toast-show 0.5s;
      }

      .swal2-popup.swal2-toast.swal2-hide {
        -webkit-animation: swal2-toast-hide 0.1s forwards;
        animation: swal2-toast-hide 0.1s forwards;
      }

      .swal2-container {
        display: flex;
        position: fixed;
        z-index: 1060;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        padding: 0.625em;
        overflow-x: hidden;
        transition: background-color 0.1s;
        -webkit-overflow-scrolling: touch;
      }

      .swal2-container.swal2-backdrop-show,
      .swal2-container.swal2-noanimation {
        background: rgba(0, 0, 0, 0.4);
      }

      .swal2-container.swal2-backdrop-hide {
        background: 0 0 !important;
      }

      .swal2-container.swal2-top {
        align-items: flex-start;
      }

      .swal2-container.swal2-top-left,
      .swal2-container.swal2-top-start {
        align-items: flex-start;
        justify-content: flex-start;
      }

      .swal2-container.swal2-top-end,
      .swal2-container.swal2-top-right {
        align-items: flex-start;
        justify-content: flex-end;
      }

      .swal2-container.swal2-center {
        align-items: center;
      }

      .swal2-container.swal2-center-left,
      .swal2-container.swal2-center-start {
        align-items: center;
        justify-content: flex-start;
      }

      .swal2-container.swal2-center-end,
      .swal2-container.swal2-center-right {
        align-items: center;
        justify-content: flex-end;
      }

      .swal2-container.swal2-bottom {
        align-items: flex-end;
      }

      .swal2-container.swal2-bottom-left,
      .swal2-container.swal2-bottom-start {
        align-items: flex-end;
        justify-content: flex-start;
      }

      .swal2-container.swal2-bottom-end,
      .swal2-container.swal2-bottom-right {
        align-items: flex-end;
        justify-content: flex-end;
      }

      .swal2-container.swal2-bottom-end > :first-child,
      .swal2-container.swal2-bottom-left > :first-child,
      .swal2-container.swal2-bottom-right > :first-child,
      .swal2-container.swal2-bottom-start > :first-child,
      .swal2-container.swal2-bottom > :first-child {
        margin-top: auto;
      }

      .swal2-container.swal2-grow-fullscreen > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-self: stretch;
        justify-content: center;
      }

      .swal2-container.swal2-grow-row > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
      }

      .swal2-container.swal2-grow-column {
        flex: 1;
        flex-direction: column;
      }

      .swal2-container.swal2-grow-column.swal2-bottom,
      .swal2-container.swal2-grow-column.swal2-center,
      .swal2-container.swal2-grow-column.swal2-top {
        align-items: center;
      }

      .swal2-container.swal2-grow-column.swal2-bottom-left,
      .swal2-container.swal2-grow-column.swal2-bottom-start,
      .swal2-container.swal2-grow-column.swal2-center-left,
      .swal2-container.swal2-grow-column.swal2-center-start,
      .swal2-container.swal2-grow-column.swal2-top-left,
      .swal2-container.swal2-grow-column.swal2-top-start {
        align-items: flex-start;
      }

      .swal2-container.swal2-grow-column.swal2-bottom-end,
      .swal2-container.swal2-grow-column.swal2-bottom-right,
      .swal2-container.swal2-grow-column.swal2-center-end,
      .swal2-container.swal2-grow-column.swal2-center-right,
      .swal2-container.swal2-grow-column.swal2-top-end,
      .swal2-container.swal2-grow-column.swal2-top-right {
        align-items: flex-end;
      }

      .swal2-container.swal2-grow-column > .swal2-modal {
        display: flex !important;
        flex: 1;
        align-content: center;
        justify-content: center;
      }

      .swal2-container.swal2-no-transition {
        transition: none !important;
      }

      .swal2-container:not(.swal2-top):not(.swal2-top-start):not(
          .swal2-top-end
        ):not(.swal2-top-left):not(.swal2-top-right):not(
          .swal2-center-start
        ):not(.swal2-center-end):not(.swal2-center-left):not(
          .swal2-center-right
        ):not(.swal2-bottom):not(.swal2-bottom-start):not(
          .swal2-bottom-end
        ):not(.swal2-bottom-left):not(.swal2-bottom-right):not(
          .swal2-grow-fullscreen
        )
        > .swal2-modal {
        margin: auto;
      }

      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .swal2-container .swal2-modal {
          margin: 0 !important;
        }
      }

      .swal2-popup {
        display: none;
        position: relative;
        box-sizing: border-box;
        flex-direction: column;
        justify-content: center;
        width: 32em;
        max-width: 100%;
        padding: 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        font-family: inherit;
        font-size: 1rem;
      }

      .swal2-popup:focus {
        outline: 0;
      }

      .swal2-popup.swal2-loading {
        overflow-y: hidden;
      }

      .swal2-header {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 1.8em;
      }

      .swal2-title {
        position: relative;
        max-width: 100%;
        margin: 0 0 0.4em;
        padding: 0;
        color: #595959;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word;
      }

      .swal2-actions {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin: 1.25em auto 0;
        padding: 0;
      }

      .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
        opacity: 0.4;
      }

      .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(
          rgba(0, 0, 0, 0.1),
          rgba(0, 0, 0, 0.1)
        );
      }

      .swal2-actions:not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(
          rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.2)
        );
      }

      .swal2-loader {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: 0.25em;
        border-style: solid;
        border-radius: 100%;
        border-color: #2778c4 transparent #2778c4 transparent;
      }

      .swal2-styled {
        margin: 0.3125em;
        padding: 0.625em 1.1em;
        box-shadow: none;
        font-weight: 500;
      }

      .swal2-styled:not([disabled]) {
        cursor: pointer;
      }

      .swal2-styled.swal2-confirm {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #2778c4;
        color: #fff;
        font-size: 1em;
      }

      .swal2-styled.swal2-deny {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #d14529;
        color: #fff;
        font-size: 1em;
      }

      .swal2-styled.swal2-cancel {
        border: 0;
        border-radius: 0.25em;
        background: initial;
        background-color: #757575;
        color: #fff;
        font-size: 1em;
      }

      .swal2-styled:focus {
        outline: 0;
        box-shadow: 0 0 0 3px rgba(100, 150, 200, 0.5);
      }

      .swal2-styled::-moz-focus-inner {
        border: 0;
      }

      .swal2-footer {
        justify-content: center;
        margin: 1.25em 0 0;
        padding: 1em 0 0;
        border-top: 1px solid #eee;
        color: #545454;
        font-size: 1em;
      }

      .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        height: 0.25em;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
      }

      .swal2-timer-progress-bar {
        width: 100%;
        height: 0.25em;
        background: rgba(0, 0, 0, 0.2);
      }

      .swal2-image {
        max-width: 100%;
        margin: 1.25em auto;
      }

      .swal2-close {
        position: absolute;
        z-index: 2;
        top: 0;
        right: 0;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        padding: 0;
        overflow: hidden;
        transition: color 0.1s ease-out;
        border: none;
        border-radius: 5px;
        background: 0 0;
        color: #ccc;
        font-family: serif;
        font-size: 2.5em;
        line-height: 1.2;
        cursor: pointer;
      }

      .swal2-close:hover {
        transform: none;
        background: 0 0;
        color: #f27474;
      }

      .swal2-close:focus {
        outline: 0;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, 0.5);
      }

      .swal2-close::-moz-focus-inner {
        border: 0;
      }

      .swal2-content {
        z-index: 1;
        justify-content: center;
        margin: 0;
        padding: 0 1.6em;
        color: #545454;
        font-size: 1.125em;
        font-weight: 400;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
      }

      .swal2-checkbox,
      .swal2-file,
      .swal2-input,
      .swal2-radio,
      .swal2-select,
      .swal2-textarea {
        margin: 1em auto;
      }

      .swal2-file,
      .swal2-input,
      .swal2-textarea {
        box-sizing: border-box;
        width: 100%;
        transition: border-color 0.3s, box-shadow 0.3s;
        border: 1px solid #d9d9d9;
        border-radius: 0.1875em;
        background: inherit;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
        color: inherit;
        font-size: 1.125em;
      }

      .swal2-file.swal2-inputerror,
      .swal2-input.swal2-inputerror,
      .swal2-textarea.swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important;
      }

      .swal2-file:focus,
      .swal2-input:focus,
      .swal2-textarea:focus {
        border: 1px solid #b4dbed;
        outline: 0;
        box-shadow: 0 0 0 3px rgba(100, 150, 200, 0.5);
      }

      .swal2-file::-moz-placeholder,
      .swal2-input::-moz-placeholder,
      .swal2-textarea::-moz-placeholder {
        color: #ccc;
      }

      .swal2-file:-ms-input-placeholder,
      .swal2-input:-ms-input-placeholder,
      .swal2-textarea:-ms-input-placeholder {
        color: #ccc;
      }

      .swal2-file::placeholder,
      .swal2-input::placeholder,
      .swal2-textarea::placeholder {
        color: #ccc;
      }

      .swal2-range {
        margin: 1em auto;
        background: #fff;
      }

      .swal2-range input {
        width: 80%;
      }

      .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center;
      }

      .swal2-range input,
      .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em;
      }

      .swal2-input {
        height: 2.625em;
        padding: 0 0.75em;
      }

      .swal2-input[type="number"] {
        max-width: 10em;
      }

      .swal2-file {
        background: inherit;
        font-size: 1.125em;
      }

      .swal2-textarea {
        height: 6.75em;
        padding: 0.75em;
      }

      .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: 0.375em 0.625em;
        background: inherit;
        color: inherit;
        font-size: 1.125em;
      }

      .swal2-checkbox,
      .swal2-radio {
        align-items: center;
        justify-content: center;
        background: #fff;
        color: inherit;
      }

      .swal2-checkbox label,
      .swal2-radio label {
        margin: 0 0.6em;
        font-size: 1.125em;
      }

      .swal2-checkbox input,
      .swal2-radio input {
        flex-shrink: 0;
        margin: 0 0.4em;
      }

      .swal2-input-label {
        display: flex;
        justify-content: center;
        margin: 1em auto;
      }

      .swal2-validation-message {
        align-items: center;
        justify-content: center;
        margin: 0 -2.7em;
        padding: 0.625em;
        overflow: hidden;
        background: #f0f0f0;
        color: #666;
        font-size: 1em;
        font-weight: 300;
      }

      .swal2-validation-message::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 0.625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center;
      }

      .swal2-icon {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 1.25em auto 1.875em;
        border: 0.25em solid transparent;
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em;
      }

      .swal2-icon.swal2-error {
        border-color: #f27474;
        color: #f27474;
      }

      .swal2-icon.swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1;
      }

      .swal2-icon.swal2-error [class^="swal2-x-mark-line"] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: 0.3125em;
        border-radius: 0.125em;
        background-color: #f27474;
      }

      .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="left"] {
        left: 1.0625em;
        transform: rotate(45deg);
      }

      .swal2-icon.swal2-error [class^="swal2-x-mark-line"][class$="right"] {
        right: 1em;
        transform: rotate(-45deg);
      }

      .swal2-icon.swal2-error.swal2-icon-show {
        -webkit-animation: swal2-animate-error-icon 0.5s;
        animation: swal2-animate-error-icon 0.5s;
      }

      .swal2-icon.swal2-error.swal2-icon-show .swal2-x-mark {
        -webkit-animation: swal2-animate-error-x-mark 0.5s;
        animation: swal2-animate-error-x-mark 0.5s;
      }

      .swal2-icon.swal2-warning {
        border-color: #facea8;
        color: #f8bb86;
      }

      .swal2-icon.swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee;
      }

      .swal2-icon.swal2-question {
        border-color: #c9dae1;
        color: #87adbd;
      }

      .swal2-icon.swal2-success {
        border-color: #a5dc86;
        color: #a5dc86;
      }

      .swal2-icon.swal2-success [class^="swal2-success-circular-line"] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        transform: rotate(45deg);
        border-radius: 50%;
      }

      .swal2-icon.swal2-success
        [class^="swal2-success-circular-line"][class$="left"] {
        top: -0.4375em;
        left: -2.0635em;
        transform: rotate(-45deg);
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em;
      }

      .swal2-icon.swal2-success
        [class^="swal2-success-circular-line"][class$="right"] {
        top: -0.6875em;
        left: 1.875em;
        transform: rotate(-45deg);
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0;
      }

      .swal2-icon.swal2-success .swal2-success-ring {
        position: absolute;
        z-index: 2;
        top: -0.25em;
        left: -0.25em;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        border: 0.25em solid rgba(165, 220, 134, 0.3);
        border-radius: 50%;
      }

      .swal2-icon.swal2-success .swal2-success-fix {
        position: absolute;
        z-index: 1;
        top: 0.5em;
        left: 1.625em;
        width: 0.4375em;
        height: 5.625em;
        transform: rotate(-45deg);
      }

      .swal2-icon.swal2-success [class^="swal2-success-line"] {
        display: block;
        position: absolute;
        z-index: 2;
        height: 0.3125em;
        border-radius: 0.125em;
        background-color: #a5dc86;
      }

      .swal2-icon.swal2-success [class^="swal2-success-line"][class$="tip"] {
        top: 2.875em;
        left: 0.8125em;
        width: 1.5625em;
        transform: rotate(45deg);
      }

      .swal2-icon.swal2-success [class^="swal2-success-line"][class$="long"] {
        top: 2.375em;
        right: 0.5em;
        width: 2.9375em;
        transform: rotate(-45deg);
      }

      .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-tip {
        -webkit-animation: swal2-animate-success-line-tip 0.75s;
        animation: swal2-animate-success-line-tip 0.75s;
      }

      .swal2-icon.swal2-success.swal2-icon-show .swal2-success-line-long {
        -webkit-animation: swal2-animate-success-line-long 0.75s;
        animation: swal2-animate-success-line-long 0.75s;
      }

      .swal2-icon.swal2-success.swal2-icon-show
        .swal2-success-circular-line-right {
        -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
        animation: swal2-rotate-success-circular-line 4.25s ease-in;
      }

      .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 0 0 1.25em;
        padding: 0;
        background: inherit;
        font-weight: 600;
      }

      .logout {
        cursor: pointer;
      }
      
      .swal2-progress-steps li {
        display: inline-block;
        position: relative;
      }

      .swal2-progress-steps .swal2-progress-step {
        z-index: 20;
        flex-shrink: 0;
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #2778c4;
        color: #fff;
        line-height: 2em;
        text-align: center;
      }

      .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: #2778c4;
      }

      .swal2-progress-steps
        .swal2-progress-step.swal2-active-progress-step
        ~ .swal2-progress-step {
        background: #add8e6;
        color: #fff;
      }

      .swal2-progress-steps
        .swal2-progress-step.swal2-active-progress-step
        ~ .swal2-progress-step-line {
        background: #add8e6;
      }

      .swal2-progress-steps .swal2-progress-step-line {
        z-index: 10;
        flex-shrink: 0;
        width: 2.5em;
        height: 0.4em;
        margin: 0 -1px;
        background: #2778c4;
      }

      [class^="swal2"] {
        -webkit-tap-highlight-color: transparent;
      }

      .swal2-show {
        -webkit-animation: swal2-show 0.3s;
        animation: swal2-show 0.3s;
      }

      .swal2-hide {
        -webkit-animation: swal2-hide 0.15s forwards;
        animation: swal2-hide 0.15s forwards;
      }

      .swal2-noanimation {
        transition: none;
      }

      .swal2-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll;
      }

      .swal2-rtl .swal2-close {
        right: auto;
        left: 0;
      }

      .swal2-rtl .swal2-timer-progress-bar {
        right: 0;
        left: auto;
      }

      @supports (-ms-accelerator: true) {
        .swal2-range input {
          width: 100% !important;
        }

        .swal2-range output {
          display: none;
        }
      }

      @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
        .swal2-range input {
          width: 100% !important;
        }

        .swal2-range output {
          display: none;
        }
      }

      @-webkit-keyframes swal2-toast-show {
        0% {
          transform: translateY(-0.625em) rotateZ(2deg);
        }

        33% {
          transform: translateY(0) rotateZ(-2deg);
        }

        66% {
          transform: translateY(0.3125em) rotateZ(2deg);
        }

        100% {
          transform: translateY(0) rotateZ(0);
        }
      }

      @keyframes swal2-toast-show {
        0% {
          transform: translateY(-0.625em) rotateZ(2deg);
        }

        33% {
          transform: translateY(0) rotateZ(-2deg);
        }

        66% {
          transform: translateY(0.3125em) rotateZ(2deg);
        }

        100% {
          transform: translateY(0) rotateZ(0);
        }
      }

      @-webkit-keyframes swal2-toast-hide {
        100% {
          transform: rotateZ(1deg);
          opacity: 0;
        }
      }

      @keyframes swal2-toast-hide {
        100% {
          transform: rotateZ(1deg);
          opacity: 0;
        }
      }

      @-webkit-keyframes swal2-toast-animate-success-line-tip {
        0% {
          top: 0.5625em;
          left: 0.0625em;
          width: 0;
        }

        54% {
          top: 0.125em;
          left: 0.125em;
          width: 0;
        }

        70% {
          top: 0.625em;
          left: -0.25em;
          width: 1.625em;
        }

        84% {
          top: 1.0625em;
          left: 0.75em;
          width: 0.5em;
        }

        100% {
          top: 1.125em;
          left: 0.1875em;
          width: 0.75em;
        }
      }

      @keyframes swal2-toast-animate-success-line-tip {
        0% {
          top: 0.5625em;
          left: 0.0625em;
          width: 0;
        }

        54% {
          top: 0.125em;
          left: 0.125em;
          width: 0;
        }

        70% {
          top: 0.625em;
          left: -0.25em;
          width: 1.625em;
        }

        84% {
          top: 1.0625em;
          left: 0.75em;
          width: 0.5em;
        }

        100% {
          top: 1.125em;
          left: 0.1875em;
          width: 0.75em;
        }
      }

      @-webkit-keyframes swal2-toast-animate-success-line-long {
        0% {
          top: 1.625em;
          right: 1.375em;
          width: 0;
        }

        65% {
          top: 1.25em;
          right: 0.9375em;
          width: 0;
        }

        84% {
          top: 0.9375em;
          right: 0;
          width: 1.125em;
        }

        100% {
          top: 0.9375em;
          right: 0.1875em;
          width: 1.375em;
        }
      }

      @keyframes swal2-toast-animate-success-line-long {
        0% {
          top: 1.625em;
          right: 1.375em;
          width: 0;
        }

        65% {
          top: 1.25em;
          right: 0.9375em;
          width: 0;
        }

        84% {
          top: 0.9375em;
          right: 0;
          width: 1.125em;
        }

        100% {
          top: 0.9375em;
          right: 0.1875em;
          width: 1.375em;
        }
      }

      @-webkit-keyframes swal2-show {
        0% {
          transform: scale(0.7);
        }

        45% {
          transform: scale(1.05);
        }

        80% {
          transform: scale(0.95);
        }

        100% {
          transform: scale(1);
        }
      }

      @keyframes swal2-show {
        0% {
          transform: scale(0.7);
        }

        45% {
          transform: scale(1.05);
        }

        80% {
          transform: scale(0.95);
        }

        100% {
          transform: scale(1);
        }
      }

      @-webkit-keyframes swal2-hide {
        0% {
          transform: scale(1);
          opacity: 1;
        }

        100% {
          transform: scale(0.5);
          opacity: 0;
        }
      }

      @keyframes swal2-hide {
        0% {
          transform: scale(1);
          opacity: 1;
        }

        100% {
          transform: scale(0.5);
          opacity: 0;
        }
      }

      @-webkit-keyframes swal2-animate-success-line-tip {
        0% {
          top: 1.1875em;
          left: 0.0625em;
          width: 0;
        }

        54% {
          top: 1.0625em;
          left: 0.125em;
          width: 0;
        }

        70% {
          top: 2.1875em;
          left: -0.375em;
          width: 3.125em;
        }

        84% {
          top: 3em;
          left: 1.3125em;
          width: 1.0625em;
        }

        100% {
          top: 2.8125em;
          left: 0.8125em;
          width: 1.5625em;
        }
      }

      @keyframes swal2-animate-success-line-tip {
        0% {
          top: 1.1875em;
          left: 0.0625em;
          width: 0;
        }

        54% {
          top: 1.0625em;
          left: 0.125em;
          width: 0;
        }

        70% {
          top: 2.1875em;
          left: -0.375em;
          width: 3.125em;
        }

        84% {
          top: 3em;
          left: 1.3125em;
          width: 1.0625em;
        }

        100% {
          top: 2.8125em;
          left: 0.8125em;
          width: 1.5625em;
        }
      }

      @-webkit-keyframes swal2-animate-success-line-long {
        0% {
          top: 3.375em;
          right: 2.875em;
          width: 0;
        }

        65% {
          top: 3.375em;
          right: 2.875em;
          width: 0;
        }

        84% {
          top: 2.1875em;
          right: 0;
          width: 3.4375em;
        }

        100% {
          top: 2.375em;
          right: 0.5em;
          width: 2.9375em;
        }
      }

      @keyframes swal2-animate-success-line-long {
        0% {
          top: 3.375em;
          right: 2.875em;
          width: 0;
        }

        65% {
          top: 3.375em;
          right: 2.875em;
          width: 0;
        }

        84% {
          top: 2.1875em;
          right: 0;
          width: 3.4375em;
        }

        100% {
          top: 2.375em;
          right: 0.5em;
          width: 2.9375em;
        }
      }

      @-webkit-keyframes swal2-rotate-success-circular-line {
        0% {
          transform: rotate(-45deg);
        }

        5% {
          transform: rotate(-45deg);
        }

        12% {
          transform: rotate(-405deg);
        }

        100% {
          transform: rotate(-405deg);
        }
      }

      @keyframes swal2-rotate-success-circular-line {
        0% {
          transform: rotate(-45deg);
        }

        5% {
          transform: rotate(-45deg);
        }

        12% {
          transform: rotate(-405deg);
        }

        100% {
          transform: rotate(-405deg);
        }
      }

      @-webkit-keyframes swal2-animate-error-x-mark {
        0% {
          margin-top: 1.625em;
          transform: scale(0.4);
          opacity: 0;
        }

        50% {
          margin-top: 1.625em;
          transform: scale(0.4);
          opacity: 0;
        }

        80% {
          margin-top: -0.375em;
          transform: scale(1.15);
        }

        100% {
          margin-top: 0;
          transform: scale(1);
          opacity: 1;
        }
      }

      @keyframes swal2-animate-error-x-mark {
        0% {
          margin-top: 1.625em;
          transform: scale(0.4);
          opacity: 0;
        }

        50% {
          margin-top: 1.625em;
          transform: scale(0.4);
          opacity: 0;
        }

        80% {
          margin-top: -0.375em;
          transform: scale(1.15);
        }

        100% {
          margin-top: 0;
          transform: scale(1);
          opacity: 1;
        }
      }

      @-webkit-keyframes swal2-animate-error-icon {
        0% {
          transform: rotateX(100deg);
          opacity: 0;
        }

        100% {
          transform: rotateX(0);
          opacity: 1;
        }
      }

      @keyframes swal2-animate-error-icon {
        0% {
          transform: rotateX(100deg);
          opacity: 0;
        }

        100% {
          transform: rotateX(0);
          opacity: 1;
        }
      }

      @-webkit-keyframes swal2-rotate-loading {
        0% {
          transform: rotate(0);
        }

        100% {
          transform: rotate(360deg);
        }
      }

      @keyframes swal2-rotate-loading {
        0% {
          transform: rotate(0);
        }

        100% {
          transform: rotate(360deg);
        }
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden;
      }

      body.swal2-height-auto {
        height: auto !important;
      }

      body.swal2-no-backdrop .swal2-container {
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        max-width: calc(100% - 0.625em * 2);
        background-color: transparent !important;
      }

      body.swal2-no-backdrop .swal2-container > .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
      }

      body.swal2-no-backdrop .swal2-container.swal2-top {
        top: 0;
        left: 50%;
        transform: translateX(-50%);
      }

      body.swal2-no-backdrop .swal2-container.swal2-top-left,
      body.swal2-no-backdrop .swal2-container.swal2-top-start {
        top: 0;
        left: 0;
      }

      body.swal2-no-backdrop .swal2-container.swal2-top-end,
      body.swal2-no-backdrop .swal2-container.swal2-top-right {
        top: 0;
        right: 0;
      }

      body.swal2-no-backdrop .swal2-container.swal2-center {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      body.swal2-no-backdrop .swal2-container.swal2-center-left,
      body.swal2-no-backdrop .swal2-container.swal2-center-start {
        top: 50%;
        left: 0;
        transform: translateY(-50%);
      }

      body.swal2-no-backdrop .swal2-container.swal2-center-end,
      body.swal2-no-backdrop .swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        transform: translateY(-50%);
      }

      body.swal2-no-backdrop .swal2-container.swal2-bottom {
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
      }

      body.swal2-no-backdrop .swal2-container.swal2-bottom-left,
      body.swal2-no-backdrop .swal2-container.swal2-bottom-start {
        bottom: 0;
        left: 0;
      }

      body.swal2-no-backdrop .swal2-container.swal2-bottom-end,
      body.swal2-no-backdrop .swal2-container.swal2-bottom-right {
        right: 0;
        bottom: 0;
      }

      @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
          overflow-y: scroll !important;
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)
          > [aria-hidden="true"] {
          display: none;
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)
          .swal2-container {
          position: static !important;
        }
      }

      body.swal2-toast-shown .swal2-container {
        background-color: transparent;
      }

      body.swal2-toast-shown .swal2-container.swal2-top {
        top: 0;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translateX(-50%);
      }

      body.swal2-toast-shown .swal2-container.swal2-top-end,
      body.swal2-toast-shown .swal2-container.swal2-top-right {
        top: 0;
        right: 0;
        bottom: auto;
        left: auto;
      }

      body.swal2-toast-shown .swal2-container.swal2-top-left,
      body.swal2-toast-shown .swal2-container.swal2-top-start {
        top: 0;
        right: auto;
        bottom: auto;
        left: 0;
      }

      body.swal2-toast-shown .swal2-container.swal2-center-left,
      body.swal2-toast-shown .swal2-container.swal2-center-start {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 0;
        transform: translateY(-50%);
      }

      body.swal2-toast-shown .swal2-container.swal2-center {
        top: 50%;
        right: auto;
        bottom: auto;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      body.swal2-toast-shown .swal2-container.swal2-center-end,
      body.swal2-toast-shown .swal2-container.swal2-center-right {
        top: 50%;
        right: 0;
        bottom: auto;
        left: auto;
        transform: translateY(-50%);
      }

      body.swal2-toast-shown .swal2-container.swal2-bottom-left,
      body.swal2-toast-shown .swal2-container.swal2-bottom-start {
        top: auto;
        right: auto;
        bottom: 0;
        left: 0;
      }

      body.swal2-toast-shown .swal2-container.swal2-bottom {
        top: auto;
        right: auto;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
      }

      body.swal2-toast-shown .swal2-container.swal2-bottom-end,
      body.swal2-toast-shown .swal2-container.swal2-bottom-right {
        top: auto;
        right: 0;
        bottom: 0;
        left: auto;
      }
    </style>
    <!-- g-hide -->
    <style type="text/css">
      iframe.goog-te-banner-frame {
        display: none !important;
      }
    </style>
    <style type="text/css">
      body {
        position: static !important;
        top: 0px !important;
      }
    </style>
    <!-- end-g-hide -->
    <!-- /GetButton.io widget-->
    <script type="text/javascript">
      (function () {
        var options = {
          whatsapp: "+",
          // WhatsApp number
          call_to_action: "Contact us!",
          // Call to action
          position: "left",
          // Position may be "right" or "left"
        };
        var proto = document.location.protocol,
          host = "getbutton.io",
          url = proto + "//static." + host;
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = url + "/widget-send-button/js/init.js";
        s.onload = function () {
          WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName("script")[0];
        x.parentNode.insertBefore(s, x);
      })();
    </script>
    <!-- /GetButton.io widget -->
    <style>
      .ncard {
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
        margin: 0.5px;
        padding: 15px;
      }

      input[type="number"],
      input[type="text"],
      input[type="email"],
      input[type="file"],
      textarea {
        border: 1px solid grey;
      }

      select {
        border: 2px solid grey;
      }

      a {
        text-decoration: none;
      }

      .blink_me {
        animation: blinker 1s linear infinite;
      }

      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
    </style>
    <link
      type="text/css"
      rel="stylesheet"
      charset="UTF-8"
      href="{{asset('user/js/m=el_main_css')}}"
    />
    <script type="text/javascript" charset="UTF-8" src="{{asset('user/js/m=el_main')}}"></script>
    <style type="text/css">
      .jqstooltip {
        position: absolute;
        left: 0px;
        top: 0px;
        visibility: hidden;
        background: rgb(0, 0, 0) transparent;
        background-color: rgba(0, 0, 0, 0.6);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
        -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
        color: white;
        font: 10px arial, san serif;
        text-align: left;
        white-space: nowrap;
        padding: 5px;
        border: 1px solid white;
        z-index: 10000;
      }

      .jqsfield {
        color: white;
        font: 10px arial, san serif;
        text-align: left;
      }
    </style>
    <style data-styled="active" data-styled-version="5.1.1"></style>
    <script charset="utf-8" src="{{asset('user/js/twk-chunk-2c78ba82.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-696bc286.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-f1596d96.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-48f46bef.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-4fe9d5dd.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-2d0b9454.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-f163fcd0.js.download')}}"></script>
    <script charset="utf-8" src="{{('user/js/twk-chunk-32507910.js.download')}}"></script>
    <style type="text/css">
      #w6usvgccamu81682637563331 {
        outline: none !important;
        visibility: visible !important;
        resize: none !important;
        box-shadow: none !important;
        overflow: visible !important;
        background: none !important;
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
        -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity 1
            }

            ) !important;
        -mz-opacity: 1 !important;
        -khtml-opacity: 1 !important;
        top: auto !important;
        right: 0px !important;
        bottom: 0px !important;
        left: auto !important;
        position: fixed !important;
        border: 0 !important;
        min-height: 0px !important;
        min-width: 0px !important;
        max-height: none !important;
        max-width: none !important;
        padding: 0px !important;
        margin: 0px !important;
        -moz-transition-property: none !important;
        -webkit-transition-property: none !important;
        -o-transition-property: none !important;
        transition-property: none !important;
        transform: none !important;
        -webkit-transform: none !important;
        -ms-transform: none !important;
        width: auto !important;
        height: auto !important;
        display: none !important;
        z-index: 2000000000 !important;
        background-color: transparent !important;
        cursor: none !important;
        float: none !important;
        border-radius: unset !important;
        pointer-events: auto !important;
        clip: auto !important;
        color-scheme: light !important;
      }

      #w6usvgccamu81682637563331.widget-hidden {
        display: none !important;
      }

      #w6usvgccamu81682637563331.widget-visible {
        display: block !important;
      }

      @media print {
        #w6usvgccamu81682637563331.widget-visible {
          display: none !important;
        }
      }
    </style>
    <script
      src="{{asset('user/js/emojione.min.js.download')}}"
      type="text/javascript"
      async=""
      defer=""
    ></script>
    <script
      src="{{('user/js/emojione.min.js.download')}}"
      type="text/javascript"
      async=""
      defer=""
    ></script>
    <style type="text/css">
      @keyframes tawkMaxOpen {
        0% {
          opacity: 0;
          transform: translate(0, 30px);
        }

        to {
          opacity: 1;
          transform: translate(0, 0px);
        }
      }

      @-moz-keyframes tawkMaxOpen {
        0% {
          opacity: 0;
          transform: translate(0, 30px);
        }

        to {
          opacity: 1;
          transform: translate(0, 0px);
        }
      }

      @-webkit-keyframes tawkMaxOpen {
        0% {
          opacity: 0;
          transform: translate(0, 30px);
        }

        to {
          opacity: 1;
          transform: translate(0, 0px);
        }
      }

      #e102n6rt6lq81682637563429.open {
        animation: tawkMaxOpen 0.25s ease !important;
      }

      @keyframes tawkMaxClose {
        from {
          opacity: 1;
          transform: translate(0, 0px);
        }

        to {
          opacity: 0;
          transform: translate(0, 30px);
        }
      }

      @-moz-keyframes tawkMaxClose {
        from {
          opacity: 1;
          transform: translate(0, 0px);
        }

        to {
          opacity: 0;
          transform: translate(0, 30px);
        }
      }

      @-webkit-keyframes tawkMaxClose {
        from {
          opacity: 1;
          transform: translate(0, 0px);
        }

        to {
          opacity: 0;
          transform: translate(0, 30px);
        }
      }

      #e102n6rt6lq81682637563429.closed {
        animation: tawkMaxClose 0.25s ease !important;
      }
    </style>
  </head>
  <!-- g-hide -->
  <body
    class="menuclose menuclose-right"
    style="
      position: relative;
      min-height: 100%;
      top: 0px;
      background-color: #298fa6;
    "
  >
    <header class="navbar-fixed" style="background-color: #298fa6">
      <nav
        class="navbar navbar-toggleable-md navbar-inverse bg-faded"
        style="background-color: #298fa6"
      >
        <div class="sidebar-left" style="background-color: #298fa6">
          <a style="background-color: #298fa6" class="navbar-brand" href="#">
            <img src="{{asset('user/images/logo.png')}}" width="100" height="60" alt="" />
          </a>
          <button
            class="btn btn-link icon-header mr-sm-2 pull-right menu-collapse"
          >
            <span style="color: white" class="fa fa-bars"></span>
          </button>
        </div>
        <!-- <form class="form-inline mr-sm-2  pull-left search-header hidden-md-down"><input type="hidden" name="form_id" value="16828215319565"><input type="hidden" name="form_token" value="890741e5844d9732625a3bf4ec08ff88">
        <input class="form-control " type="text" placeholder="Search" id="search_header">
        <button class="btn btn-link icon-header " type="submit"><span class="fa fa-search"></span></button>
      </form> -->
        <div class="d-flex mr-auto" style="background-color: #298fa6">
          &nbsp;
        </div>
        <ul class="navbar-nav content-right" style="background-color: #298fa6">
          <li class="align-self-center">
            <!-- hidden-md-down -->
            <span style="color: white">Language:</span>
            <select
              class="custom-select lang-sel"
              style="width: 110px; border: 0px solid #0080db00"
              id="language"
              onchange="changeLanguageByButtonClick()"
            >
              <option value="en" selected="">English</option>
              <option value="af">Afrikanns</option>
              <option value="sq">Albanian</option>
              <option value="ar">Arabic</option>
              <option value="hy">Armenian</option>
              <option value="eu">Basque</option>
              <option value="bn">Bengali</option>
              <option value="bg">Bulgarian</option>
              <option value="ca">Catalan</option>
              <option value="km">Cambodian</option>
              <option value="zh-CN">Chinese (Mandarin)</option>
              <option value="hr">Croation</option>
              <option value="cs">Czech</option>
              <option value="da">Danish</option>
              <option value="nl">Dutch</option>
              <option value="et">Estonian</option>
              <option value="fj">Fiji</option>
              <option value="fi">Finnish</option>
              <option value="fr">French</option>
              <option value="ka">Georgian</option>
              <option value="de">German</option>
              <option value="el">Greek</option>
              <option value="gu">Gujarati</option>
              <option value="he">Hebrew</option>
              <option value="hi">Hindi</option>
              <option value="hu">Hungarian</option>
              <option value="is">Icelandic</option>
              <option value="id">Indonesian</option>
              <option value="ga">Irish</option>
              <option value="it">Italian</option>
              <option value="ja">Japanese</option>
              <option value="jw">Javanese</option>
              <option value="ko">Korean</option>
              <option value="la">Latin</option>
              <option value="lv">Latvian</option>
              <option value="lt">Lithuanian</option>
              <option value="mk">Macedonian</option>
              <option value="ms">Malay</option>
              <option value="ml">Malayalam</option>
              <option value="mt">Maltese</option>
              <option value="mi">Maori</option>
              <option value="mr">Marathi</option>
              <option value="mn">Mongolian</option>
              <option value="ne">Nepali</option>
              <option value="no">Norwegian</option>
              <option value="fa">Persian</option>
              <option value="pl">Polish</option>
              <option value="pt">Portuguese</option>
              <option value="pa">Punjabi</option>
              <option value="qu">Quechua</option>
              <option value="ro">Romanian</option>
              <option value="ru">Russian</option>
              <option value="sm">Samoan</option>
              <option value="sr">Serbian</option>
              <option value="sk">Slovak</option>
              <option value="sl">Slovenian</option>
              <option value="es">Spanish</option>
              <option value="sw">Swahili</option>
              <option value="sv">Swedish</option>
              <option value="ta">Tamil</option>
              <option value="tt">Tatar</option>
              <option value="te">Telugu</option>
              <option value="th">Thai</option>
              <option value="bo">Tibetan</option>
              <option value="to">Tonga</option>
              <option value="tr">Turkish</option>
              <option value="uk">Ukranian</option>
              <option value="ur">Urdu</option>
              <option value="uz">Uzbek</option>
              <option value="vi">Vietnamese</option>
              <option value="cy">Welsh</option>
              <option value="xh">Xhosa</option>
            </select>
          </li>
          <li class="v-devider" style="background-color: #298fa6"></li>
          <li class="v-devider"></li>
          <li class="nav-item" style="background-color: #298fa6">
            <a class="btn btn-link icon-header" href="#">
              <span class="fa fa-podcast" style="color: white"></span>
            </a>
          </li>
        </ul>
        <div class="sidebar-right pull-right" style="background-color: #298fa6">
          <ul
            class="navbar-nav justify-content-end"
            style="background-color: #298fa6"
          >
            <li class="nav-item" style="background-color: #298fa6">
              <button
                class="btn-link btn userprofile"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <span class="userpic">
                  <img src="{{asset('user/images/logo1.png')}}" alt="user pic" />
                </span>
                <span class="text">{{auth()->user()->name}} </span>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="profile">
                  <i class="fas fa-user"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="deposit">
                  <i class="fas fa-coins"></i>
                  Deposit
                </a>
                <a class="dropdown-item" href="withdraw.">
                  <i class="fas fa-wallet"></i>
                  Withdraw
                </a>
                <a class="dropdown-item" href="withdrawalTable">
                  <i class="fas fa-exchange-alt"></i>
                  Transactions
                </a>
                <span class="dropdown-item logout" >
                  <i class="fa fa-sign-out"></i>
                  
                  <a style="color: white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                </span>
              </div>
            </li>
            <li>
              <span class="btn logout btn-link icon-header">
                <span class="fa fa-sign-out" style="color: white"></span>
              </span>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    
    <div class="sidebar-left" style="background-color: #298fa6">
      <div class="user-menu-items" style="background-color: #298fa6">
        <div class="list-unstyled btn-group" style="background-color: #298fa6">
          <button
            class="media btn btn-link"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            style="background-color: #298fa6"
          >
            <br />
            <span class="message_userpic" style="background-color: #298fa6">
              <img
                class="d-flex"
                src="{{asset('user/images/logo1.png')}}"
                alt="Generic user image"
              />
            </span>
            <span class="media-body" style="background-color: #298fa6">
              <span class="mt-0 mb-1">{{auth()->user()->name}}</span>
              <small>Verified</small>
            </span>
          </button>
        </div>
      </div>
      <br class="show" style="background-color: #298fa6" />
      <ul
        class="nav flex-column in"
        id="side-menu"
        style=""
        style="background-color: #298fa6"
      >
        <li class="nav-item">
          <a href="dashboard" class="nav-link">
            <i class="fas fa-tachometer-alt"></i>
            Account
          </a>
        </li>
        <li class="nav-item">
          <a href="deposit" class="nav-link">
            <i class="fas fa-coins"></i>
            Deposit
          </a>
        </li>
        <!--li class=" nav-item"><a href="deposit_list" class="nav-link "><i class="fas fa-exchange-alt"></i> Deposit List</a>
      </li-->
        <li class="nav-item">
          <a href="withdraw" class="nav-link">
            <i class="fas fa-wallet"></i>
            Withdraw
          </a>
        </li>
        <li class="nav-item">
          <a href="withdrawalTable" class="nav-link">
            <i class="fas fa-exchange-alt"></i>
            Withdrawal History
          </a>
        </li>
        <!-- <li class=" nav-item"><a href="trading" class="nav-link "><i class="fas fa-chart-bar"></i> Place Trade</a> -->
        <li class="nav-item">
          <a href="referals" class="nav-link">
            <i class="fas fa-chart-pie"></i>
            Referals
          </a>
        </li>
        <li class="nav-item">
          <a href="referalslink" class="nav-link">
            <i class="fa fa-signal"></i>
            Referallinks
          </a>
        </li>
        <!--li class=" nav-item"><a href="security" class="nav-link "><i class="fas fa-newspaper"></i>Security </a>
      </li!-->
        <li class="nav-item">
          <a href="profile" class="nav-link">
            <i class="fas fa-cogs"></i>
            Account Settings
          </a>
        </li>
        <li class="nav-item">
          <span  class="nav-link logout">
            <i class="fa fa-sign-out"></i>
            <a style="color: white" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
          </span>
        </li>
        <li class="title-nav"></li>
        <li class="nav-item">
          <a href="javascript:void(0)" class="menudropdown nav-link">
            Live Analysis<i class="fa fa-angle-down"></i>
          </a>
          <ul class="nav flex-column nav-second-level">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-expand-arrows-alt"></i>
                Technical Analysis
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-chart-area"></i>
                Live Market Chart
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fas fa-calendar-alt"></i>
                Market Calendar
              </a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
      </ul>
      <hr />
      <ul class="nav flex-column in" style="background-color: #298fa6">
        <li class="nav-item">
          <a href="{{asset('user/js/saved_resource')}}" class="nav-link">
            <span>
              <span class="dynamicsparkline2">
                <canvas
                  width="201"
                  height="60"
                  style="
                    display: inline-block;
                    width: 201px;
                    height: 60px;
                    vertical-align: top;
                  "
                ></canvas>
              </span>
            </span>
          </a>
        </li>
      </ul>
      <hr />
      <br style="background-color: #298fa6" />
      <br style="background-color: #298fa6" />
    </div>
    <div class="wrapper-content">
      <!-- <div class="container" style="max-width:1300px"> -->
      <div
        class="container"
        style="max-width: 2000px"
        style="background-color: #298fa6"
      >
        <div
          class="row align-items-center justify-content-between"
          style="margin-top: 25px; background-color: #298fa6"
        >
          <div class="col-16 col-sm-16">
            <p style="color: white" id="display-mail">
              <b>Email :</b>
              <span class="mail-fetch"></span>
            </p>
          </div>
        </div>

                  <!-- TradingView Widget BEGIN -->
                  <div
                  class="tradingview-widget-container"
                  style="background-color: #298fa6"
                >
                  <div class="tradingview-widget-container__widget"></div>
                  <script
                    type="text/javascript"
                    src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                    async
                  >
                      {
                      "symbols": [
                        {
                          "proName": "FOREXCOM:SPXUSD",
                          "title": "S&P 500"
                        },
                        {
                          "proName": "FOREXCOM:NSXUSD",
                          "title": "Nasdaq 100"
                        },
                        {
                          "proName": "FX_IDC:EURUSD",
                          "title": "EUR/USD"
                        },
                        {
                          "proName": "BITSTAMP:BTCUSD",
                          "title": "BTC/USD"
                        },
                        {
                          "proName": "BITSTAMP:ETHUSD",
                          "title": "ETH/USD"
                        },
                        {
                          "description": "DSH/USD",
                          "proName": "COINBASE:DASHUSD"
                        },
                        {
                          "description": "LTC/USD",
                          "proName": "BITFINEX:LTCUSD"
                        },
                        {
                          "description": "BCH/USD",
                          "proName": "BINANCE:BCHUSD"
                        },
                        {
                          "description": "ETH/BTC",
                          "proName": "BITSTAMP:ETHBTC"
                        },
                        {
                          "description": "TSLA/USD",
                          "proName": "FTX:TSLAUSD"
                        }
                      ],
                      "showSymbolLogo": true,
                      "colorTheme": "dark",
                      "isTransparent": true,
                      "displayMode": "adaptive",
                      "locale": "en"
                    }
                  </script>
                </div>
                <!-- TradingView Widget END -->
              
        <!-- TradingView Widget BEGIN -->

     
        <div
          class="row align-items-center justify-content-between"
          style="margin-top: -2px; background-color: #298fa6">
          <div class="col-16 col-sm-16" style="background-color: #298fa6">
            <div class="btn-group pull-right" style="background-color: #298fa6">
              <a href="dashboard">
                <button class="btn btn-success btn-outline-light">
                  <span class="">Account</span>
                  <span class="text">
                    <i class="fas fa-tachometer-alt ml-2"></i>
                  </span>
                </button>
              </a>
              <a href="deposit">
                <button class="btn btn-success btn-outline-light">
                  <span class="">Make Deposit</span>
                  <span class="text">
                    <i class="fas fa-coins ml-2"></i>
                  </span>
                </button>
              </a>
              <a href="withdraw">
                <button class="btn btn-success btn-outline-light">
                  <span class="">Withdraw Funds</span>
                  <span class="text">
                    <i class="fas fa-wallet ml-2"></i>
                  </span>
                </button>
              </a>
              <a href="profile">
                <button class="btn btn-danger btn-outline-danger">
                  <span class="profile">Settings</span>
                  <i class="fa fa-cog fa-spin ml-2"></i>
                </button>
              </a>
            </div>
          </div>
        </div>
        <hr style="margin-top: -2px; margin-bottom: -2px" />