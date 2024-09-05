<template>
  <section class="posts">
    <h2>Latest Posts</h2>
    <div class="post-cards">
      <div class="post-card">
        <h3>Post Title 1</h3>
        <p>Post Excerpt 1</p>
      </div>
      <div class="post-card">
        <h3>Post Title 2</h3>
        <p>Post Excerpt 2</p>
      </div>
    </div>
  </section>
</template>

<style scoped>
.posts {
  padding: 50px 20px;
  background-color: #1e1e1e;
  color: white;
  text-align: center;
}

.posts h2 {
  font-size: 36px;
  margin-bottom: 40px;
}

.post-cards {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.post-card {
  background-color: #333;
  padding: 20px;
  border-radius: 8px;
  width: 45%;
  margin: 10px;
}

.post-card h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.post-card p {
  font-size: 16px;
}

/* Media Queries */
@media (max-width: 768px) {
  .post-card {
    width: 80%;
  }

  .posts h2 {
    font-size: 28px;
  }
}
</style>
