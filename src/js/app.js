import $ from 'jquery';
import 'Bootstrap';
import 'popper.js';

window.$ = window.jQuery = $;



$(function(){
    $(".tes").html('it works')
})

var testFn = () => {
    console.log('opppa');
}

testFn()