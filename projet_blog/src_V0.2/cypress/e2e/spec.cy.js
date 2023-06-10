describe('template spec', () => {

  it('try to connect', () => {
    cy.visit('http://ruben.fr/connexion')

    cy.get('[data-cy="connexion-email"]')
    .type('navone_ruben@msn.com')
    .should('have.value', 'navone_ruben@msn.com')

    cy.get('[data-cy="connexion-password"]')
    .type('n6yWEpsuusJG8zzé"&')
    .should('have.value', 'n6yWEpsuusJG8zzé"&')

    cy.contains('submit').click()
    cy.contains("Administration").click()
    cy.contains("Gestion des articles").click()
    cy.contains("Ajouter un article").click()

    cy.get('[data-cy="add-article-name"]')
    .type('testing new article')
    .should('have.value', 'testing new article')

    cy.get('[data-cy="add-article-content"]')
    .type('Random value content for testing purpose')
    .should('have.value', 'Random value content for testing purpose')

    cy.contains('submit').click()
    cy.visit('http://ruben.fr/admin/articles')

  })

})