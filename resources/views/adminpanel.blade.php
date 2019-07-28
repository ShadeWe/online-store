<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Dashboard Template · Bootstrap</title>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link href="/css/admin-panel.css" rel="stylesheet">
      <script src="/js/pop-up-message.js"></script>
   </head>
   <body>
      <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
         <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">online-store</a>
         <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
               <a class="nav-link" href="/logout">Sign out</a>
            </li>
         </ul>
      </nav>
      <div class="container-fluid">
         <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
               <div class="sidebar-sticky">
                  <ul class="nav flex-column">
                     <li class="nav-item">
                        @if ($_SERVER['REQUEST_URI'] == "/admin-panel")
                        <a class="nav-link active" href="/admin-panel"> Home </a>
                        @else
                        <a class="nav-link" href="/admin-panel"> Home </a>
                        @endif
                     </li>
                     <li class="nav-item">
                        @if ($_SERVER['REQUEST_URI'] == "/admin-panel/products")
                        <a class="nav-link active" href="/admin-panel/products"> See all products </a>
                        @else
                        <a class="nav-link" href="/admin-panel/products"> See all products </a>
                        @endif
                     </li>
                     <li class="nav-item">
                        @if ($_SERVER['REQUEST_URI'] == "/admin-panel/new-product")
                        <a class="nav-link active" href="/admin-panel/new-product"> New product </a>
                        @else
                        <a class="nav-link" href="/admin-panel/new-product"> New product </a>
                        @endif
                     </li>
                  </ul>
               </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
               @isset($include)
               @include($include)
               @endisset
            </main>
         </div>
      </div>
      </table>
         <div class="pop-up-message">
         <!-- there's a message from the server, so we need to show this message to the user -->
         @if(isset($message))
             <script type="text/javascript">animatePopUpMessage("{{ $status }}", "{!! $message !!}");</script>
         @endif
         </div>
   </body>
</html>
