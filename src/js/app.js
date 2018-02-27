// Initiate jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;



$(function(){
    $(".tes").html('it works')
})

var testFn = () => {
    console.log('opppa');
}

testFn()