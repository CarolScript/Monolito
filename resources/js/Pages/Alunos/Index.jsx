import React from 'react';

const Index = ({ alunos }) => {
    return (
        <div>
            <h1>Lista de Alunos</h1>
            <table className="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                    </tr>
                </thead>
                <tbody>
                    {alunos.map((aluno) => (
                        <tr key={aluno.id}>
                            <td>{aluno.nome}</td>
                            <td>{aluno.idade}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default Index;
