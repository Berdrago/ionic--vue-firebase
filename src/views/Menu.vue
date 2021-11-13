<template>
  <ion-page>
    <ion-header>
      <ion-toolbar  style="colo:red" class="centrado">
        <ion-title style="color:red" > Menu</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-menu side="start" menu-id="custom" class="my-custom-menu" content-id="main">
      <ion-header>
        <ion-toolbar color="danger" class="centrado">
          <ion-title >Menu</ion-title>
        </ion-toolbar>
      </ion-header>
      <ion-content >
        <ion-list>
          <ion-item-sliding  v-for="Catproducto in Catproductos" :key="Catproducto">
            <ion-item>
              <ion-label color="danger">{{Catproducto.name}} </ion-label>
            </ion-item>
            <ion-item-options side="end">
              <ion-item-option @click="unread(item)" color="danger"> <ion-icon :icon="handRightOutline" size="large" > </ion-icon> </ion-item-option>
            </ion-item-options>
          </ion-item-sliding>
       </ion-list>
      </ion-content>
    </ion-menu>
    <ion-content >
      <ion-item id="appMoviles" >
        <ion-item>
          <ion-button color="success" @click="btnCrear" > <ion-icon :icon="addCircleOutline" size="large" > </ion-icon></ion-button>
          <h5>Stock Total : <span>{{totalStock}}</span></h5>
        </ion-item>
      </ion-item>
      <ion-item  >
        <tr>
          <th> Id : </th>
        </tr>
        <tr v-for=" movil in moviles " :key="movil">  
          <td>{{movil.id}}</td>
        </tr>
      </ion-item>
      <ion-item  >
        <tr>
          <th> Provedor : </th>
        </tr>
        <tr v-for=" movil in moviles " :key="movil">  
          <td>{{movil.provedor}}</td>
        </tr>
      </ion-item>
      <ion-item  >
        <tr>
          <th> Categoria: </th>
        </tr>
        <tr v-for=" movil in moviles " :key="movil">  
          <td>{{movil.categoria}}</td>
        </tr>
      </ion-item>
      <ion-item  >
        <tr>
          <th> Stock:</th>
        </tr>
        <tr >  
          <td>
            
          </td>
        </tr>
      </ion-item>
      <ion-button color="primary" @click="btnActualizar(movil.id, movil.provedor, movil.categoria, movil.stock )" > <ion-icon :icon="syncOutline" size="large" > </ion-icon></ion-button>
      <ion-button color="danger" @click="btnBorrar(movil.id)"> <ion-icon :icon="closeCircleOutline" size="large" > </ion-icon></ion-button>
    </ion-content >
  </ion-page>
</template>

<script lang="ts">
import { 
  IonPage,
  IonContent, 
  IonHeader, 
  IonItem, 
  IonList, 
  IonMenu, 
  IonTitle, 
  IonToolbar,
  menuController,
  IonLabel,
  IonButton,
} from '@ionic/vue';
import { defineComponent } from 'vue';
import { handRightOutline,reorderThreeOutline} from 'ionicons/icons'
import { App } from '../App.vue';
import { useRouter } from 'vue-router';
import { addCircleOutline,syncOutline, closeCircleOutline } from  'ionicons/icons'



export default defineComponent({
  name:'Menu',
  components: {
    IonPage,
    IonContent, 
    IonHeader, 
    IonItem, 
    IonList, 
    IonMenu, 
    IonTitle, 
    IonToolbar,
    IonLabel,
    IonButton,
    

  },
  data: () => ({
    producto: "",
    cproducto: "",
    cateproducto:"",
  }),
  methods: {
    login() {
      console.log(this.producto);
      console.log(this.cproducto);
      console.log(this.cateproducto)
    }
  },
    setup (){
    const  {Catproductos} = App ()
    menuController.enable(true, 'first');
    menuController.open('first');
    const router = useRouter();
    return {
      Catproductos,
      handRightOutline,
      menuController,
      reorderThreeOutline,
      router,
      addCircleOutline,
      syncOutline,
      closeCircleOutline
    }
    
    
  }
  
});
</script>