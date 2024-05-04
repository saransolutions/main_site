<?php
define("MAIN_TITLE", "Saran Solutions");
define("MAIN_LOGO_IMG", "logo.png");

define("HEAD_FOR_PDF", "Kayathri</font><font style='font-size:12pt;font-family:Times New Roman;color:#000;'>Travels</font> ");
define("HEAD_ADDRESS_LINE_1", "Hörnlistrasse 8, 8153 Rümlang.");
define("HEAD_ADDRESS_LINE_2", "Postfach 595, ");
define("HEAD_ADDRESS_LINE_3", "");
define("HEAD_PHONE", " 043 53 43 010, Mobile : 076 48 20 006");
define("HEAD_MOBILE", " ");
define("HEAD_WED_ADDRESS", "travellink.koshy@gmail.com");
define("HEAD_LOGO", "");
define("HEAD_LOGO_STYLE", "float:right;");

define("FOOT_MSG", 'Rathusstr, 63,CH – 4410 LIESTAL, Tel: 061 272 23 01 Fax: 061 272 23 04 Mobile: 076 570 50 03
www.kayathri.ch info@kayathri.ch Credit Suisse IBAN: CH85 0483 5172 4580 6100 0');


define("PDF_FOOTER_SARAN_SOLUTIONS", '<div><p style="margin-left:70%;font-size: 8pt;">Developed By <font style="font-style:italic;text-decoration: underline;">www.saransolutions.in</font></p></div>');

#server
// define("DB_NAME", "ch295301_saransol");
// define("DB_USER", "ch295301_saransol");
// define("DB_PASS", "ch295301_Saransol");

#local
define("DB_NAME", "saransol_admin");
define("DB_USER", "saransol_admin");
define("DB_PASS", "saransol_admin");

function getMetaTags(){
    return '
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">';
}

function getLinks(){
    return '
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    ';
}

function getHead($title){
    $metaTags = getMetaTags();
    $links = getLinks();
    return '
        <head>
            '.$metaTags.'
            <title>'.$title.'</title>
            <!-- Custom fonts for this template-->
            '.$links.'
        </head>';
}

function checkUserLoggedIn(){
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
    } elseif(isset($_GET['logoff']))
    {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: login.php');
    }
}

function get_scroll_to_top(){
    return '
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    ';
}

function get_logout_modal(){
    return '
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php?logoff">Logout</a>
                </div>
            </div>
        </div>
    </div>
    ';
}

function get_footer_js_scripts(){
    return '
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    ';
}

function get_default_modal_targets($profile){
    return '
    <!-- add_new Modal -->
    <div class="modal fade" id="add_new_modal" tabindex="-1" role="dialog" aria-labelledby="add_new_modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_new_modalLabel">Add New '.$profile["page-title"].'</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    '.$profile["add-new-form"].'
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of add_new Modal -->

            <!-- edit Modal -->
            <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="edit_modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit_modalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    edit box
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
            <!-- End of edit Modal -->
    ';
}

?>