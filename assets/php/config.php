<?php
  class theme {
    // 변수 시스템
    public function getVariables($darkMode) {
      $base = array(
        'base-container' => '1280px',
        'base-padding' => '2rem',
      );

      $font = array(
        'font-family' => "'Arita-dotum-Medium', 'Noto Sans KR', 'Noto Sans Korean', -apple-system, 'SF Pro Display', 'Helvetica Neue',  'Apple SD Gothic Neo', 'Roboto', 'Noto Sans KR', 'Malgun Gothic', sans-serif;"
      );
      
      $breakpoint = array(
        'mobile-w' => '1024px',
      );

      $colors = array(
        'color-primary' => '#247bff',
        'color-secondary' => '#ff3a4e',

        'color-success' => '#13ce66',
        'color-warning' => '#f7ba2a',
        'color-danger' => '#ff5a57',
        'color-info' => '#2957ff',

        'color-white' => 'white',
        'color-black' => 'black',

        'color-grey-005' => '#fefefe',
        'color-grey-010' => '#fdfdfd',
        'color-grey-020' => '#f7f8f9',
        'color-grey-030' => '#e9ebee',
        'color-grey-040' => '#C5C8CE',
        'color-grey-050' => '#646f7c',
        'color-grey-060' => '#374553',
        'color-grey-070' => '#28323c',
        'color-grey-080' => '#161d24',

        'color-background' => 'white',
        'color-text-primary' => 'white'
      );

      $utils = array(
        'border-radius-1' => '6px',
        'border-radius-2' => '8px',
        'border-radius-3' => '12px',
      );

      $darkmodeColors = array(
        'color-white' => 'black',
        'color-black' => 'white',

        'color-grey-005' => '#17181c',
        'color-grey-010' => '#1e2427',
        'color-grey-020' => '#2e363a',
        'color-grey-030' => '#41474c',
        'color-grey-040' => '#5a6166',
        'color-grey-050' => '#999fa4',
        'color-grey-060' => '#C5C8CE',
        'color-grey-070' => '#f7f8f9',
        'color-grey-080' => '#fdfdfd',

        'color-background' => '#17181c',
      );

      $variables = array_merge($base, $font, $colors, $breakpoint, $utils);

      if($darkMode) return array_merge($variables, $darkmodeColors);
      
      return $variables;
    }
  }
?>