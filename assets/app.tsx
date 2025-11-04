import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';
import ReactDOM from 'react-dom/client';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import Home from './pages/Home';
import About from './pages/About';
import Contact from './pages/Contact';
import Profile from './pages/Profile';
import DefaultLayout from './Layouts/DefaultLayout';
import './styles/app.css';

const App = () => {
     return (
    <BrowserRouter> 
      <DefaultLayout/>
      <main>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/profile" element={<Profile />} />
        </Routes>
      </main>
    </BrowserRouter>      
     );
 };

const root = document.getElementById('react-root');
 if (root) {
     ReactDOM.createRoot(root).render(<App />);
 }

