function rand() {
    return Math.round(Math.random() * 80);
}


let pictures = [
    {
        "title": "Comprendre les enjeux du numérique",
        "content": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis.Repellendus earum nobis,minima aliquam inventore numquam veritatis dignissimos praesentium!",
        "url": "./dist/img/firmbee-com-gcsNOsPEXfs-unsplash.jpg",
    },
    {
        "title": "Mettre en place une stratégie",
        "content": "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eaque doloribus, autem distinctio repellendus quae! Praesentium vel officia voluptates perferendis. Repellendus earum nobis, minima aliquam inventore numquam veritatis dignissimos praesentium!",
        "url": `./dist/img/arjan-de-jong-Sb8_i3Kz_JE-unsplash.jpg`,
    },
{
    "title": "blab",
        "content": "lorem ipsum",
            "url": `https://picsum.photos/id/${rand()}/800/600`,
    },
{
    "title": "blab",
        "content": "lorem ipsum",
            "url": `https://picsum.photos/id/${rand()}/800/600`,
    },
]

export { pictures };