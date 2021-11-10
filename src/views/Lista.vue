<template>
  <ion-page>
    <ion-header>
      <ion-toolbar  class="centrado">
         <ion-buttons  >
          <ion-back-button defaultHref="/" color="danger" mode="ios"> </ion-back-button>
        </ion-buttons>
        <ion-title style="color:red" class="title" >Lista de productos</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content  class="login">
      <ion-list>
        <ion-item>
          <ion-label color="danger">Porotos Rojos </ion-label>
          <ion-label color="danger">Cantidad:77 </ion-label>
          <ion-button color="success" > <ion-icon :icon="syncOutline" size="large" > </ion-icon></ion-button>
          <ion-button color="danger"> <ion-icon :icon="closeCircleOutline" size="large" > </ion-icon></ion-button>
        </ion-item>
        
      </ion-list>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { IonPage,IonHeader,IonTitle,IonToolbar,IonBackButton, IonButtons, } from '@ionic/vue';
import { defineComponent } from 'vue';
import { useRouter } from 'vue-router';
import {closeCircleOutline,syncOutline } from 'ionicons/icons'



export default defineComponent({
  name: 'Lista',
  components: {
    IonPage,
    IonTitle,
    IonToolbar,
    IonHeader,
    IonBackButton, 
    IonButtons,
   
  },
  setup() {
      const router = useRouter();
      return { 
        router,
        closeCircleOutline,
        syncOutline
        };
   },
  
});
</script>