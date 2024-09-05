<template>
    <section class="awards">
      <h2>Awards</h2>
      <div class="award-items">
        <div class="award-item">
          <p>Award Name 1</p>
        </div>
        <div class="award-item">
          <p>Award Name 2</p>
        </div>
      </div>
    </section>
  </template>
  
  <style scoped>
  .awards {
    padding: 50px 20px;
    background-color: #1e1e1e;
    color: white;
    text-align: center;
  }
  
  .awards h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }
  
  .award-items {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
  }
  
  .award-item {
    background-color: #333;
    padding: 20px;
    border-radius: 8px;
    margin: 10px;
    width: 30%;
  }
  
  .award-item p {
    font-size: 16px;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .award-item {
      width: 80%;
    }
  
    .awards h2 {
      font-size: 28px;
    }
  }
  </style>
  