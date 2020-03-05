Imports MySql.Data.Resources
Imports System.Data
Imports MySql.Data
Imports MySql.Data.MySqlClient
Imports System.Configuration
Imports System.IO





Public Class startpag
    Private Sub SluitenToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles SluitenToolStripMenuItem.Click
        Me.Close()
    End Sub

    Private Sub ExportToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles ExportToolStripMenuItem.Click



        If SaveFileDialog1.ShowDialog() = DialogResult.OK Then
            SaveFileDialog1.InitialDirectory = "C:\"
            SaveFileDialog1.FileName = "save me"
            SaveFileDialog1.Filter = "text files (*.txt)  | *.txt "




        End If
        Dim writer As TextWriter = New StreamWriter(SaveFileDialog1.FileName)
        For i As Integer = 0 To dgv1.Rows.Count - 2 Step +1

            For j As Integer = 0 To dgv1.Columns.Count - 1 Step +1

                writer.Write(vbTab & dgv1.Rows(i).Cells(j).Value.ToString() & vbTab & "|")

            Next

            writer.WriteLine("")
            writer.WriteLine("---------------------------------------------")

        Next
        writer.Close()
        MessageBox.Show("Data Exported")

    End Sub

    Private Sub startpag_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim connection As New MySqlConnection("datasource=localhost;port=3307;username=root;password=usbw;database=project1")


        Dim command As New MySqlCommand("SELECT * FROM project1.alleinfoverrichtingen;", connection)

        Dim conn As New MySqlConnection
        Dim myCommand As New MySqlCommand
        Dim myAdapter As New MySqlDataAdapter
        Dim myData As New DataTable
        Dim SQL As String



        SQL = "SELECT * FROM project1.alleinfoverrichtingen;"

        conn.ConnectionString = "datasource=localhost;port=3307;username=root;password=usbw;database=project1"

        Try
            conn.Open()

            Try
                myCommand.Connection = conn
                myCommand.CommandText = SQL

                myAdapter.SelectCommand = myCommand
                myAdapter.Fill(myData)

                dgv1.DataSource = myData
                dgv1.AutoSizeRowsMode = DataGridViewAutoSizeRowsMode.AllCells
            Catch myerror As MySqlException
                MsgBox("Het is helaas niet gelukt om een goed resultaat te krijgen dit was de error: " & myerror.Message)
            End Try
        Catch myerror As MySqlException
            MessageBox.Show("De Verbinding is niet gelukt dit is de reden: " & myerror.Message)
        Finally
            If conn.State <> ConnectionState.Closed Then conn.Close()
        End Try
    End Sub
End Class