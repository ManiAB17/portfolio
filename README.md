# Manikandan — Portfolio Website

A professional, fully static portfolio website built with **HTML, CSS, JavaScript & Bootstrap 5**.  
No PHP, no server required — works perfectly on **GitHub Pages**.

---

## 📁 File Structure

```
portfolio/
├── index.html          ← Home page
├── about.html          ← About page
├── projects.html       ← Projects page
├── contact.html        ← Contact page
├── assets/
│   ├── css/style.css   ← All styles
│   ├── js/script.js    ← All JavaScript
│   ├── img/            ← All images
│   └── manikandans-resume.pdf
```

---

## 🚀 Deploying to GitHub Pages

1. Create a new repository on GitHub (e.g., `portfolio`)
2. Upload all files from this folder to the repository
3. Go to **Settings → Pages**
4. Under **Source**, select `main` branch and `/ (root)` folder
5. Click **Save** — your site will be live at:  
   `https://YOUR_USERNAME.github.io/portfolio/`

---

## 📬 Enabling the Contact Form (Free — No Server Needed)

The contact form uses **Formspree** — a free form backend that works with GitHub Pages.

1. Go to [https://formspree.io](https://formspree.io) and sign up for a free account
2. Create a new form and copy your **Form ID** (looks like: `xyzabcde`)
3. Open `contact.html` and find this line:

```html
<form id="contactForm" action="https://formspree.io/f/YOUR_FORMSPREE_ID" method="POST">
```

4. Replace `YOUR_FORMSPREE_ID` with your actual form ID
5. Done! Messages will be sent directly to your email.

---

## ✏️ Customization

- **Profile photo**: Replace `assets/img/man.png` with your photo
- **Resume**: Replace `assets/img/manikandans-resume.pdf` with your latest resume
- **Social links**: Search for `href="#"` in the HTML files and add your real URLs
- **Colors**: Edit CSS variables at the top of `assets/css/style.css`

---

Built with ❤️ | Tamil Nadu, India
