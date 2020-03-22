    <style type="text/css">
      /* Dizajnë i vlefshëm per te gjithe tekstet e ueb faqes*/
      * {
        font-family: 'Poppins', sans-serif;
      }
      /* Përcaktimi i ngjyres per background te faqes*/
      body {
        background: #E5E8E8;
      }
      /*Përcaktimi ngjyres mbrenda kornizes dhe percaktimi i shadow ne anesoret e ueb faqes*/
      .container {
        background: #fff;
        -moz-box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2);
        -webkit-box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2);
        box-shadow: 0px 0px 15px 2px rgba(0,0,0,0.2); 
      }
      /* Përcaktimi i margin mbrenda menys "nav" */
      .nav {
        margin-bottom: 2.5%;
      }
      /* Përcaktimi i ngjyser se teksteve së hiperlidhjeve */
      .nav-item a {
        color: #909497;
      }
      /*Percaktimi i ngjyrës se tekstit se hiperlidhjes kur klikohet ne te dhe trashesia e teksteve*/
      .nav-item a:hover {
        color: #2E4053;
        font-weight: 900;
      }
      /* Dizajni i listes se parregullt UL ne kete raste eshte percaktuar ngjyra e pjes footer ul*/
      footer ul {
        background: #85929E;
      }
      /* Dizajnimi per elemntet e listes*/
      footer li {
        background: #85929E; /* Percaktimi ngjyres se hapsires */
        border-right: 1px solid #fff; 
        list-style: none; 
        padding: 2%;
        float: left; /* Shfaqja ne anen e majt*/
      }
     /* Dizajni per pjesesn e njoftimeve*/
      .njoftime {
        padding-top: 4%;
      }

      .njoftime ul {
        list-style: none;
      }

      #linqet ul {
        list-style: none;
      }

      #linqet li {
        font-weight: 900;
        padding: 5%;
        border-bottom: 1px solid #85929E;
      }

      #linqet a, a:hover {
        color: black;  /*ngjyra teksit*/
        text-decoration: none; /* Mos shfaqja e vizes poshtme tek hiperlidhjet */
      }

      .njoftime a {
        color:  #85929e;
      }
      /*-----------------------------*/
      /* Dizajni pjeses header*/
      .header {
        background: url('../img/top-header.png'); /*Imazhi tek pjesa header*/
        margin-bottom: 2%; /* Percaktimi i margin ne pjesen e poshtme te imazhit*/
        border-bottom-left-radius: 10px; /* Dizajni tek pjesa poshtme ne anen majt */
        border-bottom-right-radius: 10px; /* Dizajni tek pjesa poshtme ne anen majt */
      }
     /* Dizajn per shfaqen e butonit ne anen e djatht dhe pozita te jet relative d.m.th pa ndrysheshme*/
      .pwf {
            position: relative;
            float: right;
      }
    /* Dizajn per butonin per perdoruesin*/
      .opsionet-perdoruesit {
        position: absolute;
        left: 0px;
        top: 0px;
        z-index: 100;
      }
    /* Dizajn per rreshtat e tables */
      td {
        padding: 1%;
      }

      .titujt{
        font-weight: 900;
      }
      i{
        margin-left: 10px;
      }

    </style>