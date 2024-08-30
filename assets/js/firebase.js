// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { permission } from "process";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyDNRUVGbnReH6ChpWHXb_dLaa3iISMGrO8",
  authDomain: "hotel-hypnose.firebaseapp.com",
  projectId: "hotel-hypnose",
  storageBucket: "hotel-hypnose.appspot.com",
  messagingSenderId: "1064704673601",
  appId: "1:1064704673601:web:9dc752dd21c28c4b0383c0"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig),
    messaging = getMessaging(app);

(() => {
    console.log('Demande de permission...')
    Notification.requestPermission().then((permission) => {
        if(perfMetrics == 'granted') {
            console.log('Notification permission granted')
        } else{
            console.log('Notification permission rejected')
        }
    })
})