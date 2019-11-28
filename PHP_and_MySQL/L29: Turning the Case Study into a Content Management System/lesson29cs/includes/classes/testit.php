<?php
  if (!trim($this->user_name)) {
     $error = true;
    } elseif (strlen(trim($this->user_name)) < 6) {
        $error = true;
    }
