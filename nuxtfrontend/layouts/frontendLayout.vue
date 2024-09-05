<template>
    <div>
      <Header />
      <slot/>
      <Footer />
    </div>
  </template>
  
  <script>
  import Header from '~/components/RecordComponents/Header.vue';
  import Footer from '~/components/RecordComponents/Footer.vue';
  
  export default {
    components: {
      Header,
      Footer
    }
  };
  </script>
  
  <style>
  body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
  }
  
  a {
    text-decoration: none;
    color: inherit;
  }
  
  h1, h2, h3, p {
    margin: 0;
    padding: 0;
  }
  </style>
  