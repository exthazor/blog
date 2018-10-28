<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogCategory
 *
 * @author rhitam
 */
class Category {
     var $categoryid;
     var $categoryname; 
     
     public function __construct() {
         $categoryid = 0;
         $categoryname = "";
     }
     function getCategoryid() {
         return $this->categoryid;
     }

     function getCategoryname() {
         return $this->categoryname;
     }

     function setCategoryid($categoryid) {
         $this->categoryid = $categoryid;
     }

     function setCategoryname($categoryname) {
         $this->categoryname = $categoryname;
     }


}
