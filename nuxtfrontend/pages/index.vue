<template>
    
  
    <div class="home">

      <HeroSectionVue />
      <ServicesSectionVue />
      <AboutSectionVue />
      <PortfolioSectionVue />
      <ClientsSectionVue/>
      <PostsSectionVue />
      <AwardsSectionVue />
      
    </div> 
        <!-- <NuxtLink class="btn btn-primary" to="/Admin/">go to admin page</NuxtLink> -->

</template>

<script setup>
import AboutSectionVue from '~/components/RecordComponents/AboutSection.vue';
import AwardsSectionVue from '~/components/RecordComponents/AwardsSection.vue';
import ClientsSectionVue from '~/components/RecordComponents/ClientsSection.vue';
import HeroSectionVue from '~/components/RecordComponents/HeroSection.vue';
import PortfolioSectionVue from '~/components/RecordComponents/PortfolioSection.vue';
import PostsSectionVue from '~/components/RecordComponents/PostsSection.vue';
import ServicesSectionVue from '~/components/RecordComponents/ServicesSection.vue';
import frontendLayout from '~/layouts/frontendLayout.vue';

</script>

<style scoped>
  .home {
    background-color: #1e1e1e;
    color: white;
    padding: 0;
    margin: 0;
  }

</style>