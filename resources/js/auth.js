import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
import { getAuth, createUserWithEmailAndPassword, onAuthStateChanged } from "firebase/auth";

const firebaseConfig = {
  apiKey: "AIzaSyDQSznorNnJpmuy9WCLHmFGUKdHsojjsgw",
  authDomain: "the-copenhagen-gates.firebaseapp.com",
  projectId: "the-copenhagen-gates",
  storageBucket: "the-copenhagen-gates.appspot.com",
  messagingSenderId: "18676335908",
  appId: "1:18676335908:web:d368ea5613e0f712fb1fb1",
  measurementId: "G-LS4E9HLEM9"
};

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();

$('#sign-up-form').on('submit', function(e) {
  e.preventDefault();
  const element = document.getElementById("sign-up-form");
  const data = new FormData(element);
  const email = data.get('email');
  const password = data.get('password');
  createUserWithEmailAndPassword(auth, email, password)
  .then((userCredential) => {
    const user = userCredential.user;
    location.reload();
  })
  .catch((error) => {
    const errorCode = error.code;
    const errorMessage = error.message;
  });
});

onAuthStateChanged(auth, (user) => {
  if (user) {
    // User is signed in, see docs for a list of available properties
    // https://firebase.google.com/docs/reference/js/firebase.User
    const uid = user.uid;
    // ...
  } else {
    // User is signed out
    // ...
  }
});
