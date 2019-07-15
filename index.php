<?php

@include('config/bootstrap.php');

!empty($viewData) ? extract($viewData) : null;
!empty($viewPath) ? @include($viewPath) : null;