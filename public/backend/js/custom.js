// DataTable related Jquery*****************/
/* Create an array with the values of all the input boxes in a column */
$.fn.dataTable.ext.order['dom-text'] = function  ( settings, col ){
  return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
    return $('input', td).val();
  } );
}

/* Create an array with the values of all the input boxes in a column, parsed as numbers */
$.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col ){
  return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
    return $('input', td).val() * 1;
  } );
}

/* Create an array with the values of all the select options in a column */
$.fn.dataTable.ext.order['dom-select'] = function  ( settings, col ){
  return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
    return $('select', td).val();
  } );
}

/* Create an array with the values of all the checkboxes in a column */
$.fn.dataTable.ext.order['dom-checkbox'] = function  ( settings, col ){
  return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
    return $('input', td).prop('checked') ? '1' : '0';
  } );
}


/* Initialise the table with the required column ordering data types */
$(document).ready(function() {
  var table = $('#new_product_info_table_two').dataTable( {
    scrollY:        "300px",
    scrollX:        true,
    scrollCollapse: false,
    paging:         true,
    columnDefs:[
    { "orderable": false, "targets": 4}
    ],
    // processing:     true,
    // serverSide:     true,
    // ajax:           "../server_side/scripts/server_processing.php",
//    columns: [
//    { "orderDataType": "dom-text", type: 'string' },
//    { "orderDataType": "dom-text", type: 'string' },
//    { "orderDataType": "dom-text", type: 'string' },
//    { "orderDataType": "dom-text", type: 'string' },
//    null   
//    ]
  });
  
  // $('input:text').bind('focus blur', function() {
  // $('input:text').bind('focus blur', function() {  
  //     $(this).toggleClass('lightyellow');
  // });


  $('input:text').bind('focus blur', function() {
      // $(this).toggleClass('lightyellow');
      $(this).toggleClass('PaleTurquoise');
      
  });


  
});


// Add JS in here

// $(document).ready(function() {
//   var voucher_entry = $('#voucher_entry_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         true,
//     searching:      true,
//     ordering:       false,
//   });
// });




// $(document).ready(function() {
//   var voucher_entry = $('#purchase_requisition_tbl_asd').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         true,
//     searching:      true,
//     ordering:       false,
//   });
// });

// $(document).ready(function() {
//   var voucher_entry = $('#purchase_approve_tbl').DataTable( {
//     scrollY:        "380px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
//   $('#name').keyup(function(){
//     table.fnFilter( $(this).val() );
//   })
// });



$(document).ready(function() {
  var voucher_entry = $('#purchase_order_detail_tbl').DataTable( {
    scrollY:        "350px",
    scrollX:        true,
    scrollCollapse: false,
    paging:         false,
    searching:      false,
    ordering:       false,
  });
  $('#name').keyup(function(){
    table.fnFilter( $(this).val() );
  })
});



// $(document).ready(function() {
//   var voucher_entry = $('#purchase_order_list_tbl').DataTable( {
//     scrollY:        "350px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         true,
//     searching:      false,
//     ordering:       false,
//   });
//   $('#name').keyup(function(){
//     table.fnFilter( $(this).val() );
//   })
// });




$(document).ready(function() {
  var voucher_entry = $('#purchase_order_tbl').DataTable( {
    scrollY:        "300px",
    scrollX:        true,
    scrollCollapse: false,
    paging:         true,
    searching:      true,
    ordering:       false,
  });
});


// $(document).ready(function() {
//   var voucher_entry = $('#purchase_due_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
// });






// $(document).ready(function() {
//   var voucher_entry = $('#sales_invoice_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
// });


// $(document).ready(function() {
//   var voucher_entry = $('#sales_due_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
// });


// $(document).ready(function() {
//   var voucher_entry = $('#point_ofSales_tbl').DataTable( {
//     scrollY:        "400px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });

//   $('#addRow').on( 'click', function () {
//     voucher_entry.row.add( [
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="ABC" />',
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="Hulk" />',
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="Tom" />',
//       '<input type="text" id="row-4-description" name="row-4-description"          value="Jerry" />',
//       '<button type="button" class="col-lg-3 col-md-3  col-sm-3  col-xs-3 btn btn-sm button btn-info pull-right">Delete</button>'
//       ] ).draw();
//   });
// });


// $(document).ready(function() {
//   var voucher_entry = $('#supplier_delivery_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
// });


// $(document).ready(function() {
//   var voucher_entry = $('#mat_allocate_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });



//   $('#addRow').on( 'click', function () {
//     voucher_entry.row.add( [
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="ABC" />',
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="Hulk" />',
//       '<input type="text" id="row-4-description" name="row-4-description" readonly value="Tom" />',
//       '<input type="text" id="row-4-description" name="row-4-description"          value="Jerry" />',
//       '<button type="button" class="col-lg-3 col-md-3  col-sm-3  col-xs-3 btn btn-sm button btn-info pull-right">Delete</button>'
//       ] ).draw();
//   });

// });


// $(document).ready(function() {
//   var voucher_entry = $('#stock_transfer_tbl').DataTable( {
//     scrollY:        "300px",
//     scrollX:        true,
//     scrollCollapse: false,
//     paging:         false,
//     searching:      false,
//     ordering:       false,
//   });
// });


// Production Module Pages Tables




/*****************DataTable related Jquery*****************/








/*****************Validation related Jquery*****************/
jQuery(document).ready(function(){
  // binds form submission and fields to the validation engine
  jQuery("#top-entrypanel-validation").validationEngine('attach',{
    relative: false,
    overflownDIV:"#top-panel",
    scroll:true,
    // promptPosition : "centerLeft:0,-5"
    // promptPosition : "centerLeft:0,-5"
  });
  //jQuery("#bottom-entrypanel").validationEngine();
});


jQuery(document).ready(function(){
  // binds form submission and fields to the validation engine
  jQuery("#frm_modal").validationEngine('attach',{
    relative: false,
    overflownDIV:"#top-panel",
    scroll:true,
    // promptPosition : "centerLeft:0,-5"
    // promptPosition : "centerLeft:0,-5"
  });
  //jQuery("#bottom-entrypanel").validationEngine();
});

/*****************Validation related Jquery***************/


/*****************Payment Mode related Jquery***************/
$( "#designation" ).change(function() {
  var singleValues = $( "#designation" ).val();
  if( singleValues != ""){
    $( ".payment_mode_bank_card" ).slideDown( "slow" );
  }else{
    $( ".payment_mode_bank_card" ).slideUp( "slow" );
  }
});
/*****************Payment Mode related Jquery***************/


/*****************Payment Mode related Jquery***************/
$( "#payment_mode" ).change(function() {
  var singleValues = $( "#payment_mode" ).val();
  if( singleValues == "Bank" || singleValues == "Card" ){
    $( ".payment_mode_bank_card" ).slideDown( "slow" );
  }else{
    $( ".payment_mode_bank_card" ).slideUp( "slow" );
  }
});
/*****************Payment Mode related Jquery***************/


// *****************Depreciation related Jquery***************/
$( "#depreciation" ).change(function() {
  var singleValues = $( "#depreciation" ).val();
  if( singleValues == "1" ){
    $( "#depreciation_yes" ).slideDown( "slow" );
  }else{
    $( "#depreciation_yes" ).slideUp( "slow" );
  }
});
// *****************Depreciation related Jquery


// *****************Depreciation related Jquery***************/
$( "#transaction_type" ).change(function() {
  var singleValues = $( "#transaction_type" ).val();
  if( singleValues == "1" ){
    $(".payment_mode_bank_card" ).slideDown( "slow" );
  }else{
    $( ".payment_mode_bank_card" ).slideUp( "slow" );
  }
});
// *****************Depreciation related Jquery



// *****************Depreciation related Jquery***************/
// $( "#accsource" ).change(function() {
//   var singleValues = $( "#accsource" ).val();
//   if( singleValues == 2 || singleValues == 3){
//     $( "#account_source" ).slideDown( "slow" );
//     accountstatus
//   }else{
//     $( "#account_source" ).slideUp( "slow" );
//   }
// });
// *****************Depreciation related Jquery


$(document).on("keydown", function (e) {
    if (e.which === 8 && !$(e.target).is("input, textarea")) {
        e.preventDefault();
    }
});