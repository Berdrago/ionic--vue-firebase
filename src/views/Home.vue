<template>
  <ion-page>
    <ion-content  class="centrado">
      <img src="../img/Logo.png" alt="" >
      <ion-button  expand="full" fill="outline" class="espacio" style="margin: 60px" color="danger" @click="() => router.push('/login')" > Iniciar Sesion </ion-button>
      <ion-header collapse="condense">
      </ion-header>
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { IonContent, IonHeader, IonPage,IonButton } from '@ionic/vue';
import { defineComponent } from 'vue';
import { useRouter} from 'vue-router';

export default defineComponent({
  name: 'Home',
  components: {
    IonContent,
    IonHeader,
    IonPage,
    IonButton
    
  },
  setup() {
      const router = useRouter();
      return { router };
    }
});
</script>

<style scoped>
#container {
  text-align: center;
  
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}

#container strong {
  font-size: 20px;
  line-height: 26px;
}

#container p {
  font-size: 16px;
  line-height: 22px;
  
  color: #8c8c8c;
  
  margin: 0;
}

#container a {
  text-decoration: none;
}
</style>