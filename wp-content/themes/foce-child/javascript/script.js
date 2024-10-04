// IntersectionObserver pour le fade in des sections //

let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fadeIn');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  
  document.querySelectorAll('.banner, #characters, #place, #studio, .nomination-oscar, .site-footer')
    .forEach(section => observer.observe(section));

// Fonction pour découper chaque titre en mots et les envelopper dans des <span>
function wrapWordsInSpans(title) {
    const words = title.innerHTML.split(' '); // Séparer les mots par espace
    const wrappedWords = words.map(word => `<span>${word}</span>`); // Envelopper chaque mot dans un <span>
    title.innerHTML = wrappedWords.join(' '); // Remettre les mots avec des espaces
  }

// Sélectionner les titres h2 et h3 à animer
document.querySelectorAll('h2, h3').forEach(title => {
    title.classList.add('titre-animation'); // Ajouter la classe par défaut qui les rend invisibles
    wrapWordsInSpans(title); // Découper les titres en mots
    observerTitles.observe(title); // Observer chaque titre
  });