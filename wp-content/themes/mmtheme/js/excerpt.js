$(function() {
    $('.excerpt').each(function(){
        var textToHide = $(this).text().substring(100); // Check the text want to hide
        var visibleText = $(this).text().substring(0, 100); // Visible text from 0 to 100 strings
        var charCount = $(this).text().length; // Text Lenght
            //Excerpt Function
            $(this)
                .html(visibleText + ('<span>' + textToHide + '</span>'))
                .click(function() {
                $(this).find('span').toggle();
                $(this).find('button:last').hide();
                $(this).find('.dot').hide();
            });
            if(charCount < 100) { // ReadMore button willHide if textLenght is less than hundred
                $('.expBtn').hide();
            } else {
                $(this)
                .append('<span class="dot"> ...</span><br>')
                .append('<button class="expBtn btn"><a id="read-more" title="Read More">Read More</a></button');
            }
    });
});
$(document).ready(function(){
    $('.excerpt span').hide(); 
    $('.excerpt .dot').show();
});