Imports MySql.Data.Resources
Imports System.Data
Imports MySql.Data
Imports MySql.Data.MySqlClient
Imports System.Configuration
Imports System.IO


Public Class Form1
    Public dt As New DataTable
    Public dtBackup As New DataTable


    Private Sub btnInsert_Click(sender As Object, e As EventArgs) Handles btnInsert.Click
        Dim p As New evenement()
        p.Naam = txtnaam.Text
        p.aantaldagen = txtDagen.Text
        p.aantalpersonen = txtPersonen.Text

        p.Add()

    End Sub

    Private Sub btnSelect_Click(sender As Object, e As EventArgs) Handles btnSelect.Click
        werdaangepast()


    End Sub

    Private Sub werdaangepast()
        For i = 0 To dt.Rows.Count - 1

            If dt.Rows(i).RowState <> DataRowState.Unchanged Then
                Select Case dt.Rows(i).RowState
                    Case 4
                        Dim p As New evenement()
                        p.Naam = dt.Rows(i).Item("Naam")
                        p.aantaldagen = dt.Rows(i).Item("aantaldagen")
                        p.aantalpersonen = dt.Rows(i).Item("aantalpersonen")
                        p.Add()
                    Case 8
                        MessageBox.Show("werd gewist")
                        evenement.Delete(dtBackup.Rows(i).Item("IDevenement"))
                    Case 16
                        Dim p = evenement.GetOne(dt.Rows(i).Item("IDevenement"))
                        p.Naam = dt.Rows(i).Item("Naam")
                        p.aantaldagen = dt.Rows(i).Item("aantaldagen")
                        p.aantalpersonen = dt.Rows(i).Item("aantalpersonen")
                        p.Update()
                End Select
            End If
        Next
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        dt = evenement.GetAll(5, 5)
        dtBackup = evenement.GetAll(5, 5)

        DataGridViewevenement.DataSource = dt
    End Sub

    Private Sub btnUpdate_Click(sender As Object, e As EventArgs) Handles btnUpdate.Click
        Dim p As New evenement
        p.update
    End Sub
End Class
