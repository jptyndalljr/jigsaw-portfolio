import $ from 'jquery';
window.$ = window.jQuery = $;

console.log("test 1");

$(function() {
  console.log("test 2");
  $(".navbar-burger").click(function() {

      $(".navbar-burger").toggleClass("is-active");
      $(".navbar-menu").toggleClass("is-active");

  });
})
