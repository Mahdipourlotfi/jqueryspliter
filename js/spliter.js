// $.fn.resizable = function() {
//     autoHide: true,
//     handles: 'e',
//     resize: function(e, ui) 
//     {
//         var parent = ui.element.parent();
//         var remainingSpace = parent.width() - ui.element.outerWidth(),
//             divTwo = ui.element.next(),
//             divTwoWidth = (remainingSpace - (divTwo.outerWidth() - divTwo.width()))/parent.width()*100+"%";
//             divTwo.width(divTwoWidth);
//     },
//     stop: function(e, ui) 
//     {
//         var parent = ui.element.parent();
//         ui.element.css(
//         {
//             width: ui.element.width()/parent.width()*100+"%",
//         });
//     }
// });
// };
(function ( $ ) {
    this.autoHide= true;
    var shade = "#556b2f"; //private variable 
$.fn.resizable = function(options) {
        // This is the easiest way to have default options.
        var settings = $.extend({
            // These are the defaults.
            color: "#556b2f",
            backgroundColor: "white"
        }, options );

         this.css( 
             {
                 "background-color": settings.backgroundColor
             } );
this.resize(function (e, ui)  
    {
        console.log("this.resize(function (e, ui)  ");
        var parent = ui.element.parent();
        var remainingSpace = parent.width() - ui.element.outerWidth(),
            divTwo = ui.element.next(),
            divTwoWidth = (remainingSpace - (divTwo.outerWidth() - divTwo.width()))/parent.width()*100+"%";
            divTwo.width(divTwoWidth);
    });
this.stop(function (e, ui) 
    {
        console.log("this.stop(function (e, ui) ");
        var parent = ui.element.parent();
        ui.element.css(
        {
            width: ui.element.width()/parent.width()*100+"%",
        });
    });
   
        
this.click(function (e, ui) 
        {
            console.log("this.click(function (e, ui) ");
        }); 
    return this;
};
}( jQuery ));