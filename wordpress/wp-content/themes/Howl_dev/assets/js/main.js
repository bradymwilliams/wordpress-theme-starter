/**
 * Setup webpack public path
 * to enable lazy-including of
 * js chunks
 *
 */
import './vendor/webpack.publicPath';
const $ = require('jquery');

/**
 * Your theme's js starts
 * here...
 */

// silly example:
import obj from './scripts/example';

/* eslint-disable no-console */
console.log(obj); /* eslint-enable no-console */


$(document).ready(() => {
    // browser window scroll (in pixels) after which the "menu" link is shown
    const offset = 300;

    const navigationContainer = $('.cd-nav');
    const mainNavigation = navigationContainer.find('.menu--primary ul');
    const trigger = $('.cd-nav-trigger');

    function checkMenu() {
        // greater than offset
        // not fix
        // add is-fixed
        if ($(window).scrollTop() > offset && !navigationContainer.hasClass('is-fixed')) {
            navigationContainer
                .addClass('is-fixed')
                .find('.cd-nav-trigger')
                .one('webkitAnimationEnd oanimationend msAnimationEnd animationend', () => {
                    mainNavigation.addClass('has-transitions');
                    console.log('here');
                });
            console.log('got it');
        } else if ($(window).scrollTop() <= offset) {
            console.log('at top');
            // check if the menu is open when scrolling up
            if (mainNavigation.hasClass('is-visible')
                && !$('html').hasClass('no-csstransitions')) {
                // close the menu with animation
                mainNavigation
                    .addClass('is-hidden')
                    .one('webkitTransitionEnd otransitionend msTransitionEnd transitionend',
                        () => {
                            // wait for the menu to be closed and do the rest
                            mainNavigation.removeClass('is-visible is-hidden has-transitions');
                            navigationContainer.removeClass('is-fixed');
                            trigger.removeClass('menu-is-open');
                        });
            // check if the menu is open when scrolling up
            // fallback if transitions are not supported
            } else if (mainNavigation.hasClass('is-visible')
                && $('html').hasClass('no-csstransitions')) {
                mainNavigation.removeClass('is-visible has-transitions');
                navigationContainer.removeClass('is-fixed');
                trigger.removeClass('menu-is-open');
            // scrolling up with menu closed
            } else {
                navigationContainer.removeClass('is-fixed');
                mainNavigation.removeClass('has-transitions');
            }
        }
    }

    // hide or show the "menu" link
    checkMenu();

    $(window).scroll(() => {
        checkMenu();
    });

    // open or close the menu clicking on the bottom "menu" link
    trigger.on('click', () => {
        trigger.toggleClass('menu-is-open');
        // we need to remove the transitionEnd event handler
        // we add it when scolling up with the menu open
        mainNavigation.off('webkitTransitionEnd otransitionend msTransitionEnd transitionend')
            .toggleClass('is-visible');
        console.log(`Visible: ${mainNavigation.hasClass('is-visible')}`);
    });
});
