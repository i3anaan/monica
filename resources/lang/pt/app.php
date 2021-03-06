<?php

return [
    'update' => 'Atualizar',
    'save' => 'Salvar',
    'add' => 'Adicionar',
    'cancel' => 'Cancelar',
    'delete' => 'Deletar',
    'edit' => 'Editar',
    'upload' => 'Enviar',
    'close' => 'Fechar',
    'create' => 'Create',
    'remove' => 'Remover',
    'revoke' => 'Revoke',
    'done' => 'Concluído',
    'verify' => 'Verificar',
    'for' => 'para',
    'new' => 'new',
    'unknown' => 'Não sei',
    'load_more' => 'Carregar mais',
    'loading' => 'A carregar...',
    'with' => 'com',
    'days' => 'day|days',

    'application_title' => 'Monica – personal relationship manager',
    'application_description' => 'Monica is a tool to manage your interactions with your loved ones, friends and family.',
    'application_og_title' => 'Have better relations with your loved ones. Free Online CRM for friends and family.',

    'markdown_description' => 'Quer formatar seu texto? Suportamos Markdown para adicionar negrito, itálicas, listas e mais.',
    'markdown_link' => 'Ler a documentação',

    'header_settings_link' => 'Configurações',
    'header_logout_link' => 'Sair',
    'header_changelog_link' => 'Product changes',

    'main_nav_cta' => 'Adicionar Pessoa',
    'main_nav_dashboard' => 'Painel',
    'main_nav_family' => 'Contatos',
    'main_nav_journal' => 'Diário',
    'main_nav_activities' => 'Atividades',
    'main_nav_tasks' => 'Tarefas',

    'footer_remarks' => 'Alguma observação?',
    'footer_send_email' => 'Mande-me um email',
    'footer_privacy' => 'Política de Privacidade',
    'footer_release' => 'Notas de versão',
    'footer_newsletter' => 'Boletim informativo',
    'footer_source_code' => 'Contribuir',
    'footer_version' => 'Versão: :version',
    'footer_new_version' => 'Está disponível uma nova versão',

    'footer_modal_version_whats_new' => 'O que há de novo',
    'footer_modal_version_release_away' => 'A sua instalação encontra-se 1 versão atrás da versão mais recente disponível. É recomendado atualizar a sua instalação.|A sua instalação encontra-se :number versões atrás da versão mais recente disponível. É recomendado atualizar a sua instalação.',

    'breadcrumb_dashboard' => 'Painel',
    'breadcrumb_list_contacts' => 'Lista de contatos',
    'breadcrumb_journal' => 'Diário',
    'breadcrumb_settings' => 'Configurações',
    'breadcrumb_settings_export' => 'Exportar',
    'breadcrumb_settings_users' => 'Utilizadores',
    'breadcrumb_settings_users_add' => 'Adicionar um utilizador',
    'breadcrumb_settings_subscriptions' => 'Subscrição',
    'breadcrumb_settings_import' => 'Importar',
    'breadcrumb_settings_import_report' => 'Importar relatório',
    'breadcrumb_settings_import_upload' => 'Enviar',
    'breadcrumb_settings_tags' => 'Etiquetas',
    'breadcrumb_add_significant_other' => 'Adicionar companheiro(a)',
    'breadcrumb_edit_significant_other' => 'Editar companheiro(a)',
    'breadcrumb_add_note' => 'Adicionar uma nota',
    'breadcrumb_edit_note' => 'Editar nota',
    'breadcrumb_api' => 'API',
    'breadcrumb_edit_introductions' => 'Como se conheceram',
    'breadcrumb_settings_personalization' => 'Personalização',
    'breadcrumb_settings_security' => 'Segurança',
    'breadcrumb_settings_security_2fa' => 'Autenticação de dois fatores',

    'gender_male' => 'Homem',
    'gender_female' => 'Mulher',
    'gender_none' => 'Prefiro não dizer',

    'error_title' => 'Ups! Algo correu mal.',
    'error_unauthorized' => 'Não tem permissões para editar este recurso.',
    'error_save' => 'We had an error trying to save the data.',

    'default_save_success' => 'The data has been saved.',

    // Relationship types
    // Yes, each relationship type has 8 strings associated with it.
    // This is because we need to indicate the name of the relationship type,
    // and also the name of the opposite side of this relationship (father/son),
    // and then, the feminine version of the string. Finally, in some sentences
    // in the UI, we need to include the name of the person we add the relationship
    // to.
    'relationship_type_group_love' => 'Love relationships',
    'relationship_type_group_family' => 'Family relationships',
    'relationship_type_group_friend' => 'Friend relationships',
    'relationship_type_group_work' => 'Work relationships',
    'relationship_type_group_other' => 'Other kind of relationships',

    'relationship_type_partner' => 'significant other',
    'relationship_type_partner_female' => 'significant other',
    'relationship_type_partner_with_name' => ':name’s significant other',
    'relationship_type_partner_female_with_name' => ':name’s significant other',

    'relationship_type_spouse' => 'spouse',
    'relationship_type_spouse_female' => 'spouse',
    'relationship_type_spouse_with_name' => ':name’s spouse',
    'relationship_type_spouse_female_with_name' => ':name’s spouse',

    'relationship_type_date' => 'date',
    'relationship_type_date_female' => 'date',
    'relationship_type_date_with_name' => ':name’s date',
    'relationship_type_date_female_with_name' => ':name’s date',

    'relationship_type_lover' => 'lover',
    'relationship_type_lover_female' => 'lover',
    'relationship_type_lover_with_name' => ':name’s lover',
    'relationship_type_lover_female_with_name' => ':name’s lover',

    'relationship_type_inlovewith' => 'in love with',
    'relationship_type_inlovewith_female' => 'in love with',
    'relationship_type_inlovewith_with_name' => 'someone :name is in love with',
    'relationship_type_inlovewith_female_with_name' => 'someone :name is in love with',

    'relationship_type_lovedby' => 'loved by',
    'relationship_type_lovedby_female' => 'loved by',
    'relationship_type_lovedby_with_name' => ':name’s secret lover',
    'relationship_type_lovedby_female_with_name' => ':name’s secret lover',

    'relationship_type_ex' => 'ex-boyfriend',
    'relationship_type_ex_female' => 'ex-girlfriend',
    'relationship_type_ex_with_name' => ':name’s ex-boyfriend',
    'relationship_type_ex_female_with_name' => ':name’s ex-girlfriend',

    'relationship_type_parent' => 'father',
    'relationship_type_parent_female' => 'mother',
    'relationship_type_parent_with_name' => ':name’s father',
    'relationship_type_parent_female_with_name' => ':name’s mother',

    'relationship_type_child' => 'son',
    'relationship_type_child_female' => 'daughter',
    'relationship_type_child_with_name' => ':name’s son',
    'relationship_type_child_female_with_name' => ':name’s daughter',

    'relationship_type_sibling' => 'brother',
    'relationship_type_sibling_female' => 'sister',
    'relationship_type_sibling_with_name' => ':name’s brother',
    'relationship_type_sibling_female_with_name' => ':name’s sister',

    'relationship_type_grandparent' => 'grand parent',
    'relationship_type_grandparent_female' => 'grand parent',
    'relationship_type_grandparent_with_name' => ':name’s grand parent',
    'relationship_type_grandparent_female_with_name' => ':name’s grand parent',

    'relationship_type_grandchild' => 'grand child',
    'relationship_type_grandchild_female' => 'grand child',
    'relationship_type_grandchild_with_name' => ':name’s grand child',
    'relationship_type_grandchild_female_with_name' => ':name’s grand child',

    'relationship_type_uncle' => 'uncle',
    'relationship_type_uncle_female' => 'aunt',
    'relationship_type_uncle_with_name' => ':name’s uncle',
    'relationship_type_uncle_female_with_name' => ':name’s aunt',

    'relationship_type_nephew' => 'nephew',
    'relationship_type_nephew_female' => 'niece',
    'relationship_type_nephew_with_name' => ':name’s nephew',
    'relationship_type_nephew_female_with_name' => ':name’s niece',

    'relationship_type_cousin' => 'cousin',
    'relationship_type_cousin_female' => 'cousin',
    'relationship_type_cousin_with_name' => ':name’s cousin',
    'relationship_type_cousin_female_with_name' => ':name’s cousin',

    'relationship_type_godfather' => 'godfather',
    'relationship_type_godfather_female' => 'godmother',
    'relationship_type_godfather_with_name' => ':name’s godfather',
    'relationship_type_godfather_female_with_name' => ':name’s godmother',

    'relationship_type_godson' => 'godson',
    'relationship_type_godson_female' => 'goddaughter',
    'relationship_type_godson_with_name' => ':name’s godson',
    'relationship_type_godson_female_with_name' => ':name’s goddaughter',

    'relationship_type_friend' => 'friend',
    'relationship_type_friend_female' => 'friend',
    'relationship_type_friend_with_name' => ':name’s friend',
    'relationship_type_friend_female_with_name' => ':name’s friend',

    'relationship_type_bestfriend' => 'best friend',
    'relationship_type_bestfriend_female' => 'best friend',
    'relationship_type_bestfriend_with_name' => ':name’s best friend',
    'relationship_type_bestfriend_female_with_name' => ':name’s best friend',

    'relationship_type_colleague' => 'colleague',
    'relationship_type_colleague_female' => 'colleague',
    'relationship_type_colleague_with_name' => ':name’s colleague',
    'relationship_type_colleague_female_with_name' => ':name’s colleague',

    'relationship_type_boss' => 'boss',
    'relationship_type_boss_female' => 'boss',
    'relationship_type_boss_with_name' => ':name’s boss',
    'relationship_type_boss_female_with_name' => ':name’s boss',

    'relationship_type_subordinate' => 'subordinate',
    'relationship_type_subordinate_female' => 'subordinate',
    'relationship_type_subordinate_with_name' => ':name’s subordinate',
    'relationship_type_subordinate_female_with_name' => ':name’s subordinate',

    'relationship_type_mentor' => 'mentor',
    'relationship_type_mentor_female' => 'mentor',
    'relationship_type_mentor_with_name' => ':name’s mentor',
    'relationship_type_mentor_female_with_name' => ':name’s mentor',

    'relationship_type_protege' => 'protege',
    'relationship_type_protege_female' => 'protege',
    'relationship_type_protege_with_name' => ':name’s protege',
    'relationship_type_protege_female_with_name' => ':name’s protege',
];
