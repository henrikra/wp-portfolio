<?php
/*
Template Name: Home Page
 */


get_header(); ?>

<?php get_template_part('template-parts/content', 'about') ; ?>

<?php get_template_part('template-parts/content', 'skills'); ?>

<?php get_template_part('template-parts/content', 'portfolio'); ?>

<?php get_template_part('template-parts/content', 'jobexperience'); ?>

<?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>
