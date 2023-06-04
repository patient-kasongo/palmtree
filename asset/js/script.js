let liens = document.querySelectorAll('a.validation')
let liens_imprimer=document.querySelector('button.imprimer')
for(let i=0; i<liens.length; i++)
{
    let lien=liens[i]
    lien.addEventListener('click', function(event)
    {
        let reponse=window.confirm('voulez-vous valider cette inscription??')
        if(reponse===false)
        {
            event.preventDefault()
        }
    })
}

liens_imprimer.addEventListener('click', function () {
    window.print()
})