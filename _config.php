<?php
  class theme {
    // 변수 시스템
    public function getVariables($darkMode) {
      $base = array(
        'base-container' => '1200px',
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

        'color-gray-050' => '#fefefe',
        'color-gray-100' => '#fdfdfd',
        'color-gray-200' => '#f7f8f9',
        'color-gray-300' => '#e9ebee',
        'color-gray-400' => '#C5C8CE',
        'color-gray-500' => '#646f7c',
        'color-gray-600' => '#374553',
        'color-gray-700' => '#28323c',
        'color-gray-800' => '#161d24',

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

        'color-gray-050' => '#17181c',
        'color-gray-100' => '#1e2427',
        'color-gray-200' => '#2e363a',
        'color-gray-300' => '#41474c',
        'color-gray-400' => '#5a6166',
        'color-gray-500' => '#999fa4',
        'color-gray-600' => '#C5C8CE',
        'color-gray-700' => '#f7f8f9',
        'color-gray-800' => '#fdfdfd',

        'color-background' => '#17181c',
      );

      $variables = array_merge($base, $font, $colors, $breakpoint, $utils);

      if($darkMode) return array_merge($variables, $darkmodeColors);
      
      return $variables;
    }
  }
?>