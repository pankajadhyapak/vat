<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vat</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="http://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    {{ HTML::style('css/style.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include('_navbar')
    <div class="container">

        @if(Session::has('flash_message'))
        <div class="alert alert-dismissable alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ Session::get('flash_message') }}
        </div>

        @endif

        @yield('content')
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $('.alert').delay(2000).slideUp();

        //  BootStrap Menu Drop Down on Hovwr
//        $('ul.nav li.dropdown').hover(function() {
//            $(this).find('.dropdown-menu').stop(true, true).slideDown(100);
//        }, function() {
//            $(this).find('.dropdown-menu').stop(true, true).slideUp(100);
//        });
    </script>

    {{ HTML::script('datepicker/picker.js') }}
    {{ HTML::script('datepicker/picker.date.js') }}
    <script type="text/javascript">
        $(document).ready(function(){
            $( '#idate' ).pickadate({
            format: 'dd/mm/yyyy',
                formatSubmit: 'yyyy/mm/dd',
                min:-180,
                max: new Date()
            });

            $( '#original_invoice_date' ).pickadate({
                format: 'dd/mm/yyyy',
                formatSubmit: 'yyyy/mm/dd',
                min:-180,
                max: new Date()
            });

            $( '#debit_note_date' ).pickadate({
                format: 'dd/mm/yyyy',
                formatSubmit: 'yyyy/mm/dd',
                min:-180,
                max: new Date()
            });

            $( '#credit_note_date' ).pickadate({
                format: 'dd/mm/yyyy',
                formatSubmit: 'yyyy/mm/dd',
                min:-180,
                max: new Date()
            });
        });
    </script>
  </body>
</html>