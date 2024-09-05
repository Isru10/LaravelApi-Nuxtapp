<template>
    <div>
      <h1>Edit Post</h1>
      <form @submit.prevent="updatePost" enctype="multipart/form-data">
        <input v-model="title" type="text" placeholder="Title" required />
        <textarea v-model="body" placeholder="Body" required></textarea>
        <input type="file" @change="handleFileUpload" />
        <button type="submit">Update Blog</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import { useRoute, useRouter } from 'vue-router';
  import axios from 'axios';
  const route = useRoute();
  const router = useRouter();
  const title = ref('');
  const body = ref('');
  const image = ref(null);
  
  onMounted( () => {
    axios.get(`http://127.0.0.1:8000/api/blogs/${route.params.id}/edit`).then((res)=>{
       title.value = res.data.blog.title;
    body.value = res.data.blog.body;
    console.log(res.data)
 
    });
  });
  
  const handleFileUpload = (event) => {
    image.value = event.target.files[0];
  };
  
  const updatePost = async () => {
    const formData = new FormData();
    formData.append('title', title.value);
    formData.append('body', body.value);
    if (image.value) {
      formData.append('image', image.value);
    }
  axios.post(`http://127.0.0.1:8000/api/blogs/${route.params.id}/edit`, formData).then((res)=>{
    console.log(res.data);
    alert("update sucessfull")
    router.push('/Admin/Blogs');
    axios.get('http://127.0.0.1:8000/api/blogs').then(res =>{
        blogs.value = res.data;
    });


  });
  
    // router.push(`/post/${route.params.id}`);
  };
  </script>
  