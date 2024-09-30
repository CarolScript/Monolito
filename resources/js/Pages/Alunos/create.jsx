import React from 'react';
import { Inertia } from '@inertiajs/inertia';

const Create = ({ escolas }) => {
    const handleSubmit = (e) => {
        e.preventDefault();
        const data = new FormData(e.target);
        Inertia.post('/alunos', data); // Isso vai enviar o formulário via Inertia
    };

    return (
        <div className="container mx-auto mt-10">
            <h1 className="text-2xl font-bold mb-5">Adicionar Novo Aluno</h1>
            <form onSubmit={handleSubmit} className="space-y-4">
                <div>
                    <label htmlFor="nome">Nome do Aluno:</label>
                    <input type="text" name="nome" id="nome" required />
                </div>

                <div>
                    <label htmlFor="idade">Idade:</label>
                    <input type="number" name="idade" id="idade" required />
                </div>

                <div>
                    <label htmlFor="escola_id">Escola:</label>
                    <select name="escola_id" id="escola_id" required>
                        {escolas.map((escola) => (
                            <option key={escola.id} value={escola.id}>
                                {escola.nome}
                            </option>
                        ))}
                    </select>
                </div>

                <button type="submit" className="bg-blue-500 text-white px-4 py-2 rounded">
                    Adicionar Aluno
                </button>
            </form>
        </div>
    );
};

export default Create;
