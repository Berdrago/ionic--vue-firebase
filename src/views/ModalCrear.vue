import { defineComponent } from 'vue';
<template>
    <ion-modal
        :is-open="isOpen" @onDidDismiss="handleDidDismiss(true)">
    <ion-page>
        <ion-header>
            <ion-toolbar>
                <ion-title style="color:red" class="centrado">
                    Agregar Productos
                </ion-title>
            </ion-toolbar>
        </ion-header>
        <ion-content class="ion-padding" >
            <ion-item style="color:red">
                <ion-label position="stacked" >Nombre de Producto :</ion-label>
                <ion-input  v-model="formInfo.producto"> </ion-input>
            </ion-item>
            <ion-item style="color:red" >
                <ion-label position="stacked">Descripcion del  Producto:</ion-label>
                <ion-textarea v-model="formInfo.descripcion" rows="2"></ion-textarea>
            </ion-item>
            <ion-item style="color:red">
                <ion-label position="stacked">Stock : </ion-label>
                <ion-input  v-model="formInfo.stock"> </ion-input>
            </ion-item>
            <ion-item style="color:red" >
                <ion-label position="stacked">Categoria :</ion-label>
                <ion-input  v-model="formInfo.categoria"> </ion-input>
            </ion-item>
            <ion-item style="color:red" >
                <ion-label position="stacked" >Fecha de vencimiento :</ion-label>
                <ion-datetime display-format="DD MM YYYY"  cancel-text="Cancelar" done-text="Ingresar" v-model="formInfo.fecha"> </ion-datetime>
            </ion-item>
            <ion-button expand="full" fill="outline"  color="success"  @click="Ingresar">Ingresar</ion-button>
        </ion-content>
        <ion-button  @click="handleDidDismiss(false)">Salir</ion-button>
        <ion-button  color= "danger" @click="handleDidDismiss(true)">Cancelar</ion-button>
    </ion-page>
    </ion-modal>
  
</template>

<script lang="ts">
import {
    IonModal,
    IonButton, 
    IonContent, 
    IonPage,
    IonTitle,
    IonHeader,
    IonLabel,
    IonItem,
    IonInput,
    IonDatetime,
    IonTextarea
} from '@ionic/vue';
import { defineComponent, ref, SetupContext} from "vue"

export default defineComponent ({
    name:'ModalCrear',
    components:{
        IonButton, 
        IonModal, 
        IonContent, 
        IonPage,
        IonTitle,
        IonHeader,
        IonLabel,
        IonItem,
        IonInput,
        IonDatetime,
        IonTextarea,
    },
    props : {
        isOpen: {
            default: false,
            requerid: true,
        },
    },
    setup(props: any, ctx: SetupContext){
        const formInfo = ref<any>({
            producto:"",
            descripcion:"",
            stock:"",
            categoria:"",
            fecha:""
        });
        const handleDidDismiss = ( isCancelled: boolean)=>{
            if (!props.isOpen ) return;
            console.log(isCancelled);
            ctx.emit("modal-closed", { isCancelled, 
            formInfo: !isCancelled ?  formInfo.value : null 
            });
            formInfo.value = {};

        };
        return{
            handleDidDismiss,
            formInfo 
        };

    },
    

});
</script>

