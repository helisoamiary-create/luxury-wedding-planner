<!DOCTYPE html>
<html>
    <head>
        <title>Fiche Mariage</title>

        <style>
            body {
                font-family: Arial;
                padding: 40px;
                background: white;
                color: black;
            }

            h1 {
                text-align: center;
                margin-bottom: 30px;
            }

            .section {
                margin-bottom: 30px;
            }

            .grid {
                display: flex;
                gap: 20px;
            }

            .card {
                border: 1px solid #000;
                padding: 15px;
                flex: 1;
                text-align: center;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            table th, table td {
                border: 1px solid black;
                padding: 8px;
            }

            /* bouton non imprimé */
            .no-print {
                margin-top: 40px;
                text-align: center;
            }

            @media print {
                .no-print {
                    display: none;
                }
            }
        </style>

    </head>
    <body>

        <h1>Fiche Mariage</h1>

        <div class="section">
            <strong>Marié :</strong> {{ $mariage->nom_marie }}<br>
            <strong>Mariée :</strong> {{ $mariage->nom_mariee }}<br>
            <strong>Date :</strong> {{ $mariage->date_mariage }}<br>
            <strong>Lieu :</strong> {{ $mariage->lieu }}<br>
            <strong>Status :</strong> {{ $mariage->status }}
        </div>

        <div class="section">
            <h3>Statistiques invités</h3>

            <div class="grid">
                <div class="card">Total<br>{{ $total }}</div>
                <div class="card">Confirmés<br>{{ $confirmes }}</div>
                <div class="card">Attente<br>{{ $attente }}</div>
                <div class="card">Refusés<br>{{ $refuses }}</div>
            </div>
        </div>

        <div class="section">
            <h3>Invités</h3>

            <table>
                <tr>
                    <th>Nom</th>
                    <th>Présence</th>
                </tr>

                @foreach($invites as $invite)
                <tr>
                    <td>{{ $invite->nom }}</td>
                    <td>{{ $invite->presence }}</td>
                </tr>
                @endforeach

            </table>
        </div>

        <!-- BOUTON FINAL -->
        <div class="no-print">
            <button onclick="window.print()" style="padding:10px 20px; font-size:16px;">
                Imprimer en PDF
            </button>
        </div>

    </body>
</html>