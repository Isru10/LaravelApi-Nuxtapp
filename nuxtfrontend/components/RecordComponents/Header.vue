<script setup>
const items = [
  { name: "Home", path: "/", icon: "solar:home-smile-outline" },
  {
    name: "Projects",
    path: "/projects",
    icon: "solar:folder-with-files-outline",
  },
  {
    name: "Articles",
    path: "/articles",
    icon: "solar:document-add-outline",
  },
  { name: "Lab", path: "/lab", icon: "heroicons:beaker" },
  {
    name: "What's in my bag?",
    path: "/whats-in-my-bag",
    icon: "solar:backpack-outline",
  },
  {
    name: "Bookmarks",
    path: "/bookmarks",
    icon: "solar:bookmark-linear",
  },
];

</script>
<template>
    <header class="header">
      <div class="logo">Logo</div>
      <nav class="nav">
        <a href="#">Home</a>
        <a href="#">Services</a>
        <a href="#">Portfolio</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </nav>
    </header>
  </template>
  
  <style scoped>
  .header {
    background-color: black;
    color: #fff;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }
  
  .nav {
    display: flex;
    flex-wrap: wrap;
  }
  
  .nav a {
    margin-left: 20px;
    color: #fff;
  }
  
  .logo {
    font-size: 24px;
    font-weight: bold;
  }
  
  /* Media Queries */
  @media (max-width: 768px) {
    .header {
      flex-direction: column;
      align-items: flex-start;
    }
  
    .nav {
      flex-direction: column;
      margin-top: 10px;
    }
  
    .nav a {
      margin: 10px 0;
    }
  }
  </style>
  