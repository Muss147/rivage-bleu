/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

import 'flowbite';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.addEventListener('DOMContentLoaded', () => {
    const video = document.getElementById('rivageVideo');
    const fullscreenBtn = document.getElementById('fullscreenBtn');

    if (!video) return;

    /* 🎥 Autoplay au scroll */
    const observer = new IntersectionObserver(
        ([entry]) => {
        if (entry.isIntersecting) {
            video.play().catch(() => {});
        } else {
            video.pause();
        }
        },
        {
        threshold: 0.6, // 60% visible
        }
    );

    observer.observe(video);

    /* 🖥️ Plein écran */
    fullscreenBtn.addEventListener('click', () => {
        if (video.requestFullscreen) {
        video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen(); // Safari
        }
    });

    video.addEventListener('ended', () => {
        video.currentTime = 0;
        video.play();
    });
});