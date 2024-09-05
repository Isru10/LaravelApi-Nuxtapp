<template>
    <section class="hero">
        
      <div class="hero-content">
        <h1>Crafting Soundscapes That Elevate Your Music Experience</h1>
        <button>Learn More</button>
      </div>
    </section>
  </template>
  
  <style scoped>
  .hero {
    height: 80vh;
    background-image: url('/public/hero-section@3x.png');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;


    /* new for background image */


  }
  
  .hero-content {
    text-align: center;
    color: white;
    padding: 0 20px;
  }
  
  .hero-content h1 {
    font-size: 48px;
    margin-bottom: 20px;
  }
  
  .hero-content button {
    background-color: #e4002b;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }
  
  .hero-content button:hover {
    background-color: #b00020;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .hero-content h1 {
      font-size: 32px;
    }
  
    .hero-content button {
      padding: 8px 16px;
      font-size: 14px;
    }
  }
  </style>
  