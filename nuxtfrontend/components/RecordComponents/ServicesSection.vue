<template>
    <section class="services">
      <h2>Explore the World of Music Production</h2>
      <div class="service-cards">
        <div class="service-card">
          <h3>Service Title 1</h3>
          <p>Service Description 1</p>
        </div>
        <div class="service-card">
          <h3>Service Title 2</h3>
          <p>Service Description 2</p>
        </div>
        <div class="service-card">
          <h3>Service Title 3</h3>
          <p>Service Description 3</p>
        </div>
      </div>
    </section>
  </template>
  
  <style scoped>
  .services {
    padding: 50px 20px;
    text-align: center;
  }
  
  .services h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }
  
  .service-cards {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  
  .service-card {
    background-color: #2a2a2a;
    padding: 20px;
    border-radius: 8px;
    width: 30%;
    color: white;
    margin: 10px;
  }
  
  .service-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .service-card p {
    font-size: 16px;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .service-card {
      width: 80%;
      margin: 10px 0;
    }
  
    .services h2 {
      font-size: 28px;
    }
  }
  </style>
  