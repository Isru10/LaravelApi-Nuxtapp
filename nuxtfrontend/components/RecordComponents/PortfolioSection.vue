<template>
    <section class="portfolio">
      <h2>Portfolio</h2>
      <div class="portfolio-items">
       
        <div class="portfolio-item">
          <img src="portfolio_image1.jpg" alt="Portfolio Image 1">
          <p>Project Title 1</p>
        </div>


        <div class="portfolio-item">
          <img src="portfolio_image2.jpg" alt="Portfolio Image 2">
          <p>Project Title 2</p>
        </div>

        
      </div>
    </section>
  </template>
  
  <style scoped>
  .portfolio {
    padding: 50px 20px;
    background-color: #1e1e1e;
    color: white;
    text-align: center;
  }
  
  .portfolio h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }
  
  .portfolio-items {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
  }
  
  .portfolio-item {
    width: 40%;
    margin: 10px;
  }
  
  .portfolio-item img {
    width: 100%;
    border-radius: 8px;
  }
  
  .portfolio-item p {
    margin-top: 10px;
    font-size: 16px;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .portfolio-item {
      width: 80%;
    }
  
    .portfolio h2 {
      font-size: 28px;
    }
  }
  </style>
  