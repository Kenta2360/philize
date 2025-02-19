document.addEventListener('DOMContentLoaded', function(){
    const addSectionBtn = document.getElementById('add-section-btn');
    let sectionIndex = 0;

    if(addSectionBtn){
        addSectionBtn.addEventListener('click', function(){
            const sectionContainer = document.createElement('div');
            sectionContainer.classList.add('section-container');

            sectionContainer.innerHTML =
            `
            <label>見出し</label>
            <input type="text" name="sections[${sectionIndex}][heading]" required>

            <label>本文</label>
            <textarea name="sections[${sectionIndex}][content]" required></textarea>

            <button type="button" class="remove-section-btn">削除</button>
            `;

            //セクション削除機能
            sectionContainer.querySelector('.remove-section-btn').addEventListener('click', function(){
                sectionContainer.remove();
            });
            document.getElementById('sections').appendChild(sectionContainer);
            sectionIndex++;
        });
    }

})
