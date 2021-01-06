$( function() {
  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 8000000,
    values: [ 1000000, 5000000 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    }
  });
  $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );

$( function() {
  $( "#slider-range-size" ).slider({
    range: true,
    min: 0,
    max: 10000,
    values: [ 20, 2000 ],
    slide: function( event, ui ) {
      $( "#size" ).val( ui.values[ 0 ] + " m2 - " + ui.values[ 1 ] + " m2" );
    }
  });
  $( "#size" ).val( $( "#slider-range-size" ).slider( "values", 0 ) + " m2 - " + $( "#slider-range-size" ).slider( "values", 1 ) + " m2" );
} );