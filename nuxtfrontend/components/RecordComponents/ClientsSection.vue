<template>
    <section class="clients">
      <h2>Clients</h2>
      <div class="client-logos">
        <div class="client-logo">
          <img src="image-1@2x.png" alt="Client Logo 1">
        </div>
        <div class="client-logo">
          <img src="image-1@2x.png" alt="Client Logo 2">
        </div>
        <div class="client-logo">
          <img src="image-1@2x.png" alt="Client Logo 2">
        </div>

        <div class="client-logo">
          <img src="image-1@2x.png" alt="Client Logo 2">
        </div>

      </div>
    </section>
  </template>
  
  <style scoped>
  .clients {
    padding: 50px 20px;
    background-color: #2a2a2a;
    color: white;
    text-align: center;
  }
  
  .clients h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }
  
  .client-logos {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  
  .client-logo {
    margin: 20px;
  }
  
  .client-logo img {
    width: 100px;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .client-logo {
      margin: 10px;
    }
  
    .clients h2 {
      font-size: 28px;
    }
  }
  </style>
  