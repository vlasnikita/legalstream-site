document.addEventListener('DOMContentLoaded', function(){

    document.querySelectorAll('.Input input').forEach(input => {
        input.addEventListener('focus', e => {
            const line = e.target.parentNode.querySelector('.Input__bottomline')
            line.style.height = '2px'
            line.style.background = '#eee'
        })

        input.addEventListener('blur', e => {
            const line = e.target.parentNode.querySelector('.Input__bottomline')
            line.style.height = '1px'
            line.style.background = '#303040'
        })
    })

});

